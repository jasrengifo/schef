<?php

namespace App\Entity;

use App\Repository\IngredientCategoryRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=IngredientCategoryRepository::class)
 */
class IngredientCategory
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
}
