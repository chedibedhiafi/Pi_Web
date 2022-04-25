<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Produits
 *
 * @ORM\Table(name="produits", indexes={@ORM\Index(name="id_promotion", columns={"id_promotion"}), @ORM\Index(name="test", columns={"id_categorie"})})
 * @ORM\Entity
 */
class Produits
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
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=256, nullable=false)
     */
    private $nom;

    /**
     * @var int
     *
     * @ORM\Column(name="prix", type="integer", nullable=false)
     */
    private $prix;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=256, nullable=false)
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description;

    /**
     * @var int
     *
     * @ORM\Column(name="profit", type="integer", nullable=false)
     */
    private $profit;

    /**
     * @var \Categorie
     *
     * @ORM\ManyToOne(targetEntity="Categorie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_categorie", referencedColumnName="id")
     * })
     */
    private $idCategorie;

    /**
     * @var \Promotion
     *
     * @ORM\ManyToOne(targetEntity="Promotion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_promotion", referencedColumnName="id")
     * })
     */
    private $idPromotion;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Pointdevente", inversedBy="idProduit")
     * @ORM\JoinTable(name="stock",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_produit", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_pointdevente", referencedColumnName="reference")
     *   }
     * )
     */
    private $idPointdevente;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idPointdevente = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrix(): ?int
    {
        return $this->prix;
    }

    public function setPrix(int $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getProfit(): ?int
    {
        return $this->profit;
    }

    public function setProfit(int $profit): self
    {
        $this->profit = $profit;

        return $this;
    }

    public function getIdCategorie()
    {
        return $this->idCategorie;
    }

    public function setIdCategorie(?Categorie $idCategorie): self
    {
        $this->idCategorie = $idCategorie;

        return $this;
    }

    public function getIdPromotion()
    {
        return $this->idPromotion;
    }

    public function setIdPromotion(?Promotion $idPromotion): self
    {
        $this->idPromotion = $idPromotion;

        return $this;
    }

    /**
     * @return Collection<int, Pointdevente>
     */
    public function getIdPointdevente(): Collection
    {
        return $this->idPointdevente;
    }

    public function addIdPointdevente(Pointdevente $idPointdevente): self
    {
        if (!$this->idPointdevente->contains($idPointdevente)) {
            $this->idPointdevente[] = $idPointdevente;
        }

        return $this;
    }

    public function removeIdPointdevente(Pointdevente $idPointdevente): self
    {
        $this->idPointdevente->removeElement($idPointdevente);

        return $this;
    }

}
