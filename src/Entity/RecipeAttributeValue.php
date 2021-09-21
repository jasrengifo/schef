<?php

namespace App\Entity;

use App\Repository\RecipeAttributeValueRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RecipeAttributeValueRepository::class)
 */
class RecipeAttributeValue
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=RecipeAttribute::class, inversedBy="recipe_attribute_values")
     * @ORM\JoinColumn(nullable=false)
     */
    private $recipe_attribute;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $default_value;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getDefaultValue(): ?string
    {
        return $this->default_value;
    }

    public function setDefaultValue(string $default_value): self
    {
        $this->default_value = $default_value;

        return $this;
    }
}
