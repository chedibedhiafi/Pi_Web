<?php

namespace App\Entity;

use App\Repository\CommandeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=CommandeRepository::class)
 */
class Commande
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;




    /**
     * @Assert\NotBlank(message=" titre doit etre non vide")
     * @ORM\Column(type="date")
     */
    private $date_creation;

    /**
     * @Assert\NotBlank(message=" titre doit etre non vide")
     * @ORM\Column(type="date")
     */
    private $date_envoie;

    /**
     * @Assert\NotBlank(message=" titre doit etre non vide")
     * @ORM\Column(type="float")
     */
    private $total;

    /**
     * @Assert\NotBlank(message=" titre doit etre non vide")
     * @ORM\Column(type="float")
     */
    private $tva;


    /**
     * @ORM\OneToOne(targetEntity=Livraison::class, mappedBy="commande", cascade={"persist", "remove"})
     */
    private $livraison;

    /**
     * @ORM\ManyToOne(targetEntity=Produitcommande::class, inversedBy="commande")
     * @ORM\JoinColumn(nullable=false)
     */
    private $commande;


    public function getId(): ?int
    {
        return $this->id;
    }



    public function getDateCreation(): ?\DateTimeInterface
    {
        return $this->date_creation;
    }

    public function setDateCreation(\DateTimeInterface $date_creation): self
    {
        $this->date_creation = $date_creation;

        return $this;
    }

    public function getDateEnvoie(): ?\DateTimeInterface
    {
        return $this->date_envoie;
    }

    public function setDateEnvoie(\DateTimeInterface $date_envoie): self
    {
        $this->date_envoie = $date_envoie;

        return $this;
    }

    public function getTotal(): ?float
    {
        return $this->total;
    }

    public function setTotal(float $total): self
    {
        $this->total = $total;

        return $this;
    }

    public function getTva(): ?float
    {
        return $this->tva;
    }

    public function setTva(float $tva): self
    {
        $this->tva = $tva;

        return $this;
    }

    public function getLivraison(): ?Livraison
    {
        return $this->livraison;
    }

    public function setLivraison(Livraison $livraison): self
    {
        // set the owning side of the relation if necessary
        if ($livraison->getCommande() !== $this) {
            $livraison->setCommande($this);
        }

        $this->livraison = $livraison;

        return $this;
    }

    public function getCommande(): ?Produitcommande
    {
        return $this->commande;
    }

    public function setCommande(?Produitcommande $commande): self
    {
        $this->commande = $commande;

        return $this;
    }




}
