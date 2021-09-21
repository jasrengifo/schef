<?php

namespace App\Entity;

use App\Repository\RecipeIngredientsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RecipeIngredientsRepository::class)
 */
class RecipeIngredients
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=recipe::class, inversedBy="Ingredients")
     * @ORM\JoinColumn(nullable=false)
     */
    private $recipe;

    /**
     * @ORM\ManyToOne(targetEntity=Ingredient::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $ingredient;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdRecipe(): ?recipe
    {
        return $this->recipe;
    }

    public function setIdRecipe(?recipe $id_recipe): self
    {
        $this->recipe = $id_recipe;

        return $this;
    }

    public function getIdIngredient(): ?ingredient
    {
        return $this->ingredient;
    }

    public function setIdIngredient(?ingredient $ingredient): self
    {
        $this->ingredient = $ingredient;

        return $this;
    }
}
