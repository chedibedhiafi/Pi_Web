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




}
