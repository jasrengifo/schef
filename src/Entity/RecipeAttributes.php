<?php

namespace App\Entity;

use App\Repository\RecipeAttributesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RecipeAttributesRepository::class)
 */
class RecipeAttributes
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=recipe::class, inversedBy="recipeAttributes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $recipe;

    /**
     * @ORM\ManyToOne(targetEntity=recipeAttribute::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $recipe_attribute;

    /**
     * @ORM\ManyToOne(targetEntity=recipeAttributeValue::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $recipe_attribute_value;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRecipe(): ?recipe
    {
        return $this->recipe;
    }

    public function setRecipe(?recipe $recipe): self
    {
        $this->recipe = $recipe;

        return $this;
    }

    public function getRecipeAttribute(): ?recipeAttribute
    {
        return $this->recipe_attribute;
    }

    public function setRecipeAttribute(?recipeAttribute $recipe_attribute): self
    {
        $this->recipe_attribute = $recipe_attribute;

        return $this;
    }

    public function getRecipeAttributeValue(): ?recipeAttributeValue
    {
        return $this->recipe_attribute_value;
    }

    public function setRecipeAttributeValue(?recipeAttributeValue $recipe_attribute_value): self
    {
        $this->recipe_attribute_value = $recipe_attribute_value;

        return $this;
    }
}
