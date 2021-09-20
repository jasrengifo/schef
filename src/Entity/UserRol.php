<?php

namespace App\Entity;

use App\Repository\UserRolRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UserRolRepository::class)
 */
class UserRol
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


    public function __construct()
    {

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






}
