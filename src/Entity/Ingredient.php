<?php

namespace App\Entity;

use App\Repository\IngredientRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=IngredientRepository::class)
 */
class Ingredient
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $default_name;

    /**
     * @ORM\Column(type="boolean")
     */
    private $animal_origin;

    /**
     * @ORM\Column(type="integer")
     */
    private $spicy_level;

    /**
     * @ORM\Column(type="boolean")
     */
    private $active;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $image;

    /**
     * @ORM\Column(type="boolean")
     */
    private $checked;

    /**
     * @ORM\Column(type="datetime")
     */
    private $created;

    /**
     * @ORM\Column(type="datetime")
     */
    private $updated;

    /**
     * @ORM\OneToMany(targetEntity=IngredientCategories::class, mappedBy="id_ingredient", orphanRemoval=true)
     */
    private $category;


    public function __construct()
    {
        $this->id_category = new ArrayCollection();
        $this->category = new ArrayCollection();
    }



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDefaultName(): ?string
    {
        return $this->default_name;
    }

    public function setDefaultName(string $default_name): self
    {
        $this->default_name = $default_name;

        return $this;
    }

    public function getAnimalOrigin(): ?bool
    {
        return $this->animal_origin;
    }

    public function setAnimalOrigin(bool $animal_origin): self
    {
        $this->animal_origin = $animal_origin;

        return $this;
    }

    public function getSpicyLevel(): ?int
    {
        return $this->spicy_level;
    }

    public function setSpicyLevel(int $spicy_level): self
    {
        $this->spicy_level = $spicy_level;

        return $this;
    }

    public function getActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->active = $active;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getChecked(): ?bool
    {
        return $this->checked;
    }

    public function setChecked(bool $checked): self
    {
        $this->checked = $checked;

        return $this;
    }

    public function getCreated(): ?\DateTimeInterface
    {
        return $this->created;
    }

    public function setCreated(\DateTimeInterface $created): self
    {
        $this->created = $created;

        return $this;
    }

    public function getUpdated(): ?\DateTimeInterface
    {
        return $this->updated;
    }

    public function setUpdated(\DateTimeInterface $updated): self
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * @return Collection|IngredientCategories[]
     */
    public function getCategory(): Collection
    {
        return $this->category;
    }

    public function addCategory(IngredientCategories $category): self
    {
        if (!$this->category->contains($category)) {
            $this->category[] = $category;
            $category->setIdIngredient($this);
        }

        return $this;
    }

    public function removeCategory(IngredientCategories $category): self
    {
        if ($this->category->removeElement($category)) {
            // set the owning side to null (unless already changed)
            if ($category->getIdIngredient() === $this) {
                $category->setIdIngredient(null);
            }
        }

        return $this;
    }




}
