<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Reservation
 *
 * @ORM\Table(name="reservation", indexes={@ORM\Index(name="Fk_Event", columns={"FK_Event"})})
 * @ORM\Entity(repositoryClass="App\Repository\ReservationRepository")
 */
class Reservation
{
    /**
     * @var int
     *
     * @ORM\Column(name="Reserv_Id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @Groups("post:read")
     */
    private $reservId;

    /**
     * @var string
     *
     * @ORM\Column(name="Nb_Places", type="string", length=10, nullable=false)
     * @Groups("post:read")
     */
    private $nbPlaces;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date_Achat", type="date", nullable=true)
     * @Groups("post:read")
     */
    private $dateAchat;

    /**
     * @var string
     *
     * @ORM\Column(name="Total", type="string", length=11, nullable=false)
     * @Groups("post:read")
     */
    private $total;

    /**
     * @var \Event
     *
     * @ORM\ManyToOne(targetEntity="Event")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="FK_Event", referencedColumnName="Event_Id")
     * })
     * @Groups("post:read")
     */
    private $fkEvent;

    public function getReservId(): ?int
    {
        return $this->reservId;
    }

    public function getNbPlaces(): ?string
    {
        return $this->nbPlaces;
    }

    public function setNbPlaces(string $nbPlaces): self
    {
        $this->nbPlaces = $nbPlaces;

        return $this;
    }

    public function getDateAchat(): ?\DateTimeInterface
    {
        return $this->dateAchat;
    }

    public function setDateAchat(?\DateTimeInterface $dateAchat): self
    {
        $this->dateAchat = $dateAchat;

        return $this;
    }

    public function getTotal(): ?string
    {
        return $this->total;
    }

    public function setTotal(string $total): self
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
