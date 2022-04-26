<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stock
 *
 * @ORM\Table(name="stock", indexes={@ORM\Index(name="fk_idproduits", columns={"id_produit"}), @ORM\Index(name="id_pointdevente", columns={"id_pointdevente"})})
 * @ORM\Entity
 */
class Stock
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="quantite", type="integer", nullable=false)
     */
    private $quantite;

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

    public function getId(): ?int
    {
        return $this->id;
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

    public function getIdProduit(): ?Produits
    {
        return $this->idProduit;
    }

    public function setIdProduit(?Produits $idProduit): self
    {
        $this->idProduit = $idProduit;

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
