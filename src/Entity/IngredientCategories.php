<?php

namespace App\Entity;

use App\Repository\IngredientCategoriesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=IngredientCategoriesRepository::class)
 */
class IngredientCategories
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Ingredient::class, inversedBy="category")
     * @ORM\JoinColumn(nullable=false)
     */
    private $id_ingredient;

    /**
     * @ORM\ManyToOne(targetEntity=IngredientCategory::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $id_category;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdIngredient(): ?Ingredient
    {
        return $this->id_ingredient;
    }

    public function setIdIngredient(?Ingredient $id_ingredient): self
    {
        $this->id_ingredient = $id_ingredient;

        return $this;
    }

    public function getIdCategory(): ?IngredientCategory
    {
        return $this->id_category;
    }

    public function setIdCategory(?IngredientCategory $id_category): self
    {
        $this->id_category = $id_category;

        return $this;
    }
}
