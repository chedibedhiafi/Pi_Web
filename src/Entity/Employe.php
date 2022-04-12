<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Employe
 *
 * @ORM\Table(name="employe", indexes={@ORM\Index(name="id_pointdevente", columns={"id_pointdevente"}), @ORM\Index(name="id", columns={"id"})})
 * @ORM\Entity
 */
class Employe
{
    /**
     * @var string
     *
     * @ORM\Column(name="role", type="string", length=255, nullable=false)
     */
    private $role;

    /**
     * @var \Utilisateur
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id", referencedColumnName="id")
     * })
     */
    private $id;

    /**
     * @var \Pointdevente
     *
     * @ORM\ManyToOne(targetEntity="Pointdevente")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_pointdevente", referencedColumnName="reference")
     * })
     */
    private $idPointdevente;

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(string $role): self
    {
        $this->role = $role;

        return $this;
    }

    public function getId(): ?Utilisateur
    {
        return $this->id;
    }

    public function setId(?Utilisateur $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getIdPointdevente(): ?Pointdevente
    {
        return $this->idPointdevente;
    }

    public function setIdPointdevente(?Pointdevente $idPointdevente): self
    {
        $this->idPointdevente = $idPointdevente;

        return $this;
    }


}
