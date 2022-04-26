<?php

namespace App\Entity;

use App\Repository\PaiementRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation\Groups;
/**
 * @ORM\Entity(repositoryClass=PaiementRepository::class)
 */
class Paiement
{

    /**
     * @var int
     *
     * @ORM\Column(name="ID_Payment", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @Groups("post:read")
     */
    private $idPayment;




    /**
     * @var string|null
     *
     * @ORM\Column(name="Mode_payment", type="string", length=10, nullable=true)
     * @Assert\NotBlank (message="Ce champ est obligatoire")
     * @Groups("post:read")
     */
    private $modePayment;

    /**
     * @ORM\OneToOne(targetEntity=Produitcommande::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $commande;


    /**
     * Payments constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return int
     */
    public function getIdPayment(): int
    {
        return $this->idPayment;
    }

    /**
     * @param int $idPayment
     */
    public function setIdPayment(int $idPayment): void
    {
        $this->idPayment = $idPayment;
    }


    /**
     * @return float|null
     */
    public function getPrixF(): ?float
    {
        return $this->prixF;
    }

    /**
     * @param float|null $prixF
     */
    public function setPrixF(?float $prixF): void
    {
        $this->prixF = $prixF;
    }

    /**
     * @return string|null
     */
    public function getModePayment(): ?string
    {
        return $this->modePayment;
    }

    /**
     * @param string|null $modePayment
     */
    public function setModePayment(?string $modePayment): void
    {
        $this->modePayment = $modePayment;
    }

    public function getCommande(): ?Produitcommande
    {
        return $this->commande;
    }

    public function setCommande(Produitcommande $commande): self
    {
        $this->commande = $commande;

        return $this;
    }

    public function getTotal(): ?Commande
    {
        return $this->total;
    }

    public function setTotal(Commande $total): self
    {
        $this->total = $total;

        return $this;
    }


}
