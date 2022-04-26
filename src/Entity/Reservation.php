<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation
 *
 * @ORM\Table(name="reservation", indexes={@ORM\Index(name="Fk_Event", columns={"FK_Event"})})
 * @ORM\Entity
 */
class Reservation
{
    /**
     * @var int
     *
     * @ORM\Column(name="Reserv_Id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $reservId;

    /**
     * @var int
     *
     * @ORM\Column(name="Nb_Places", type="integer", nullable=false)
     */
    private $nbPlaces;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date_Achat", type="date", nullable=false)
     */
    private $dateAchat;

    /**
     * @var int
     *
     * @ORM\Column(name="Total", type="integer", nullable=false)
     */
    private $total;

    /**
     * @var \Event
     *
     * @ORM\ManyToOne(targetEntity="Event")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="FK_Event", referencedColumnName="Event_Id")
     * })
     */
    private $fkEvent;

    public function getReservId(): ?int
    {
        return $this->reservId;
    }

    public function getNbPlaces(): ?int
    {
        return $this->nbPlaces;
    }

    public function setNbPlaces(int $nbPlaces): self
    {
        $this->nbPlaces = $nbPlaces;

        return $this;
    }

    public function getDateAchat(): ?\DateTimeInterface
    {
        return $this->dateAchat;
    }

    public function setDateAchat(\DateTimeInterface $dateAchat): self
    {
        $this->dateAchat = $dateAchat;

        return $this;
    }

    public function getTotal(): ?int
    {
        return $this->total;
    }

    public function setTotal(int $total): self
    {
        $this->total = $total;

        return $this;
    }

    public function getFkEvent(): ?Event
    {
        return $this->fkEvent;
    }

    public function setFkEvent(?Event $fkEvent): self
    {
        $this->fkEvent = $fkEvent;

        return $this;
    }


}
