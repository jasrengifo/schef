<?php

namespace App\Entity;

use App\Repository\RecipeAttributeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RecipeAttributeRepository::class)
 */
class RecipeAttribute
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
     * @ORM\OneToMany(targetEntity=RecipeAttributeValue::class, mappedBy="recipe_attribute")
     */
    private $recipe_attribute_values;

    public function __construct()
    {
        $this->recipe_attribute_values = new ArrayCollection();
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

    /**
     * @return Collection|RecipeAttributeValue[]
     */
    public function getRecipeAttributeValues(): Collection
    {
        return $this->recipe_attribute_values;
    }

    public function addRecipeAttributeValue(RecipeAttributeValue $recipeAttributeValue): self
    {
        if (!$this->recipe_attribute_values->contains($recipeAttributeValue)) {
            $this->recipe_attribute_values[] = $recipeAttributeValue;
            $recipeAttributeValue->setRecipeAttribute($this);
        }

        return $this;
    }

    public function removeRecipeAttributeValue(RecipeAttributeValue $recipeAttributeValue): self
    {
        if ($this->recipe_attribute_values->removeElement($recipeAttributeValue)) {
            // set the owning side to null (unless already changed)
            if ($recipeAttributeValue->getRecipeAttribute() === $this) {
                $recipeAttributeValue->setRecipeAttribute(null);
            }
        }

        return $this;
    }
}
