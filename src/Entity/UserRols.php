<?php

namespace App\Entity;

use App\Repository\UserRolsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UserRolsRepository::class)
 */
class UserRols
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity=user::class, inversedBy="id_rol", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $id_user;

    /**
     * @ORM\OneToOne(targetEntity=UserRol::class, inversedBy="apagar", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $id_rol;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdUser(): ?user
    {
        return $this->id_user;
    }

    public function setIdUser(user $id_user): self
    {
        $this->id_user = $id_user;

        return $this;
    }

    public function getIdRol(): ?userRol
    {
        return $this->id_rol;
    }

    public function setIdRol(userRol $id_rol): self
    {
        $this->id_rol = $id_rol;

        return $this;
    }
}
