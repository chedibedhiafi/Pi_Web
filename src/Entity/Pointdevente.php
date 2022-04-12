<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Pointdevente
 *
 * @ORM\Table(name="pointdevente")
 * @ORM\Entity
 * @UniqueEntity(fields={"name"}, message="Cet intervenant existe  déjà  .")

 */
class Pointdevente
{
    /**
     * @var int
     *
     * @ORM\Column(name="reference", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $reference;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     * @Assert\NotBlank(message=" Le champ du nom doit etre non vide")
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="proprietaire", type="string", length=255, nullable=false)
     * @Assert\NotBlank(message=" Le champ du proprietaire doit etre non vide")
     */
    private $proprietaire;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255, nullable=false)
     * @Assert\NotBlank(message=" Le champ de l'adresse doit etre non vide")
     */
    private $adresse;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_ouverture", type="date", nullable=false)
     * @Assert\NotBlank(message=" Le champ de la date d'ouverture doit etre non vide")
     */
    private $dateOuverture;

    /**
     * @var string
     *
     * @ORM\Column(name="longitude", type="string", length=255, nullable=false)
     * @Assert\NotBlank(message=" Le champ de la longitude doit etre non vide")
     */
    private $longitude;

    /**
     * @var string
     *
     * @ORM\Column(name="latitude", type="string", length=255, nullable=false)
     * @Assert\NotBlank(message=" Le champ de la latitude doit etre non vide")
     */
    private $latitude;

    public function getReference(): ?int
    {
        return $this->reference;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getProprietaire(): ?string
    {
        return $this->proprietaire;
    }

    public function setProprietaire(string $proprietaire): self
    {
        $this->proprietaire = $proprietaire;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getDateOuverture(): ?\DateTimeInterface
    {
        return $this->dateOuverture;
    }

    public function setDateOuverture(\DateTimeInterface $dateOuverture): self
    {
        $this->dateOuverture = $dateOuverture;

        return $this;
    }

    public function getLongitude(): ?string
    {
        return $this->longitude;
    }

    public function setLongitude(string $longitude): self
    {
        $this->longitude = $longitude;

        return $this;
    }

    public function getLatitude(): ?string
    {
        return $this->latitude;
    }

    public function setLatitude(string $latitude): self
    {
        $this->latitude = $latitude;

        return $this;
    }


}
