<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Livraison
 *
 * @ORM\Table(name="livraison", indexes={@ORM\Index(name="gdjfdj", columns={"id_commande"})})
 * @ORM\Entity
 */
class Livraison
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
     * @var float
     *
     * @ORM\Column(name="frais_livraison", type="float", precision=10, scale=0, nullable=false)
     */
    private $fraisLivraison;

    /**
     * @var int
     *
     * @ORM\Column(name="etat_livraison", type="integer", nullable=false)
     */
    private $etatLivraison;

    /**
     * @var int
     *
     * @ORM\Column(name="num_livreur", type="integer", nullable=false)
     */
    private $numLivreur;

    /**
     * @var \Commande
     *
     * @ORM\ManyToOne(targetEntity="Commande")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_commande", referencedColumnName="id")
     * })
     */
    private $idCommande;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFraisLivraison(): ?float
    {
        return $this->fraisLivraison;
    }

    public function setFraisLivraison(float $fraisLivraison): self
    {
        $this->fraisLivraison = $fraisLivraison;

        return $this;
    }

    public function getEtatLivraison(): ?int
    {
        return $this->etatLivraison;
    }

    public function setEtatLivraison(int $etatLivraison): self
    {
        $this->etatLivraison = $etatLivraison;

        return $this;
    }

    public function getNumLivreur(): ?int
    {
        return $this->numLivreur;
    }

    public function setNumLivreur(int $numLivreur): self
    {
        $this->numLivreur = $numLivreur;

        return $this;
    }

    public function getIdCommande(): ?Commande
    {
        return $this->idCommande;
    }

    public function setIdCommande(?Commande $idCommande): self
    {
        $this->idCommande = $idCommande;

        return $this;
    }


}
