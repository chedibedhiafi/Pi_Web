<?php

namespace App\Entity;

use App\Repository\LivraisonRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=LivraisonRepository::class)
 */
class Livraison
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column(type="integer")
     */
    private $id_commande;


    /**
     * @ORM\Column(type="float")
     * @Assert\NotBlank(message=" titre doit etre non vide")
     */
    private $frais_livraison;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank(message=" titre doit etre non vide")
     */
    private $num_livreur;

    public function getId(): ?int
    {
        return $this->id;
    }



    public function getFraisLivraison(): ?float
    {
        return $this->frais_livraison;
    }

    public function setFraisLivraison(float $frais_livraison): self
    {
        $this->frais_livraison = $frais_livraison;

        return $this;
    }

    public function getNumLivreur(): ?int
    {
        return $this->num_livreur;
    }

    public function setNumLivreur(int $num_livreur): self
    {
        $this->num_livreur = $num_livreur;

        return $this;
    }

    public function getIdCommande(): ?int
    {
        return $this->id_commande;
    }


    public function setIdCommande( int $id_commande): self
    {
        $this->id_commande = $id_commande;
        return $this;
    }

}
