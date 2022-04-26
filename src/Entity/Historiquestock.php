<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Historiquestock
 *
 * @ORM\Table(name="historiquestock", indexes={@ORM\Index(name="fk_idPointDeVenteHistorique", columns={"id_pointdevente"}), @ORM\Index(name="id_produit", columns={"id_produit", "id_pointdevente"}), @ORM\Index(name="IDX_924A0199F7384557", columns={"id_produit"})})
 * @ORM\Entity
 */
class Historiquestock
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
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var int
     *
     * @ORM\Column(name="quantite", type="integer", nullable=false)
     */
    private $quantite;

    /**
     * @var string
     *
     * @ORM\Column(name="reason", type="string", length=255, nullable=false)
     */
    private $reason;

    /**
     * @var \Produits
     *
     * @ORM\ManyToOne(targetEntity="Produits")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_produit", referencedColumnName="id")
     * })
     */
    private $idProduit;

    /**
     * @var \Pointdevente
     *
     * @ORM\ManyToOne(targetEntity="Pointdevente")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_pointdevente", referencedColumnName="reference")
     * })
     */
    private $idPointdevente;

    public function getReference(): ?int
    {
        return $this->reference;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(int $quantite): self
    {
        $this->quantite = $quantite;

        return $this;
    }

    public function getReason(): ?string
    {
        return $this->reason;
    }

    public function setReason(string $reason): self
    {
        $this->reason = $reason;

        return $this;
    }

    public function getIdProduit(): ?Produits
    {
        return $this->idProduit;
    }

    public function setIdProduit(Produits $idProduit): self
    {
        $this->idProduit = $idProduit;

        return $this;
    }

    public function getIdPointdevente(): ?Pointdevente
    {
        return $this->idPointdevente;
    }

    public function setIdPointdevente(Pointdevente $idPointdevente): self
    {
        $this->idPointdevente = $idPointdevente;

        return $this;
    }


}
