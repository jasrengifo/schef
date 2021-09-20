<?php

namespace App\Entity;

use App\Repository\RecipeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RecipeRepository::class)
 */
class Recipe
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
     * @ORM\Column(type="datetime")
     */
    private $created;

    /**
     * @ORM\Column(type="datetime")
     */
    private $updated;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="recipes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $id_user;

    /**
     * @ORM\Column(type="boolean")
     */
    private $premium;

    /**
     * @ORM\Column(type="boolean")
     */
    private $private;

    /**
     * @ORM\Column(type="boolean")
     */
    private $deleted;

    /**
     * @ORM\OneToMany(targetEntity=RecipeIngredients::class, mappedBy="id_recipe")
     */
    private $ingredients;

    /**
     * @ORM\OneToMany(targetEntity=RecipeSteps::class, mappedBy="id_recipe")
     */
    private $steps;

    /**
     * @ORM\OneToMany(targetEntity=RecipeImages::class, mappedBy="recipe")
     */
    private $recipeImages;

    /**
     * @ORM\OneToMany(targetEntity=RecipeAttributes::class, mappedBy="recipe")
     */
    private $recipeAttributes;

    public function __construct()
    {
        $this->ingredients = new ArrayCollection();
        $this->steps = new ArrayCollection();
        $this->recipeImages = new ArrayCollection();
        $this->recipeAttributes = new ArrayCollection();
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

    public function getIdUser(): ?User
    {
        return $this->id_user;
    }

    public function setIdUser(?user $id_user): self
    {
        $this->id_user = $id_user;

        return $this;
    }

    public function getPremium(): ?bool
    {
        return $this->premium;
    }

    public function setPremium(bool $premium): self
    {
        $this->premium = $premium;

        return $this;
    }

    public function getPrivate(): ?bool
    {
        return $this->private;
    }

    public function setPrivate(bool $private): self
    {
        $this->private = $private;

        return $this;
    }

    public function getDeleted(): ?bool
    {
        return $this->deleted;
    }

    public function setDeleted(bool $deleted): self
    {
        $this->deleted = $deleted;

        return $this;
    }

    /**
     * @return Collection|RecipeIngredients[]
     */
    public function getIngredients(): Collection
    {
        return $this->ingredients;
    }

    public function addIngredient(RecipeIngredients $ingredient): self
    {
        if (!$this->ingredients->contains($ingredient)) {
            $this->ingredients[] = $ingredient;
            $ingredient->setIdRecipe($this);
        }

        return $this;
    }

    public function removeIngredient(RecipeIngredients $ingredient): self
    {
        if ($this->ingredients->removeElement($ingredient)) {
            // set the owning side to null (unless already changed)
            if ($ingredient->getIdRecipe() === $this) {
                $ingredient->setIdRecipe(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|RecipeSteps[]
     */
    public function getSteps(): Collection
    {
        return $this->steps;
    }

    public function addStep(RecipeSteps $step): self
    {
        if (!$this->steps->contains($step)) {
            $this->steps[] = $step;
            $step->setIdRecipe($this);
        }

        return $this;
    }

    public function removeStep(RecipeSteps $step): self
    {
        if ($this->steps->removeElement($step)) {
            // set the owning side to null (unless already changed)
            if ($step->getIdRecipe() === $this) {
                $step->setIdRecipe(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|RecipeImages[]
     */
    public function getRecipeImages(): Collection
    {
        return $this->recipeImages;
    }

    public function addRecipeImage(RecipeImages $recipeImage): self
    {
        if (!$this->recipeImages->contains($recipeImage)) {
            $this->recipeImages[] = $recipeImage;
            $recipeImage->setRecipe($this);
        }

        return $this;
    }

    public function removeRecipeImage(RecipeImages $recipeImage): self
    {
        if ($this->recipeImages->removeElement($recipeImage)) {
            // set the owning side to null (unless already changed)
            if ($recipeImage->getRecipe() === $this) {
                $recipeImage->setRecipe(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|RecipeAttributes[]
     */
    public function getRecipeAttributes(): Collection
    {
        return $this->recipeAttributes;
    }

    public function addRecipeAttribute(RecipeAttributes $recipeAttribute): self
    {
        if (!$this->recipeAttributes->contains($recipeAttribute)) {
            $this->recipeAttributes[] = $recipeAttribute;
            $recipeAttribute->setRecipe($this);
        }

        return $this;
    }

    public function removeRecipeAttribute(RecipeAttributes $recipeAttribute): self
    {
        if ($this->recipeAttributes->removeElement($recipeAttribute)) {
            // set the owning side to null (unless already changed)
            if ($recipeAttribute->getRecipe() === $this) {
                $recipeAttribute->setRecipe(null);
            }
        }

        return $this;
    }
}
