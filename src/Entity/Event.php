<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;


/**
 * Event
 * @Vich\Uploadable
 * @ORM\Table(name="event")
 * @ORM\Entity
 */
class Event
{
    /**
     * @var int
     *
     * @ORM\Column(name="Event_Id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @Groups("post:read")
     */
    private $eventId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date_Event", type="date", nullable=false)
     * @Groups("post:read")
     */
    private $dateEvent;

    /**
     * @var string
     *
     * @ORM\Column(name="Titre", type="string", length=100, nullable=false)
     * @Groups("post:read")
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="Prix", type="string", length=11, nullable=false)
     * @Groups("post:read")
     */
    private $prix;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Image", type="string", length=254, nullable=true, options={"default"="NULL"})
     * @Groups("post:read")
     */
    private $image = 'NULL';

    /**
     * @Vich\UploadableField(mapping="product_images", fileNameProperty="image")
     * @var File
     * @Groups("post:read")
     */
    private $imageFile;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Description", type="text", length=65535, nullable=true, options={"default"="NULL"})
     * @Groups("post:read")
     */
    private $description = 'NULL';

    /**
     * @var int
     *
     * @ORM\Column(name="Nb_Places", type="integer", nullable=false)
     * @Groups("post:read")
     */
    private $nbPlaces;

    public function getEventId(): ?int
    {
        return $this->eventId;
    }

    public function getDateEvent(): ?\DateTimeInterface
    {
        return $this->dateEvent;
    }

    public function setDateEvent(\DateTimeInterface $dateEvent): self
    {
        $this->dateEvent = $dateEvent;

        return $this;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getPrix(): ?string
    {
        return $this->prix;
    }

    public function setPrix(string $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
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

    public function setImageFile($image = null)
    {
        $this->imageFile = $image;

        // VERY IMPORTANT:
        // It is required that at least one field changes if you are using Doctrine,
        // otherwise the event listeners won't be called and the file is lost
        if ($image) {
            // if 'updatedAt' is not defined in your entity, use another property
            $this->updatedAt = new \DateTime('now');
        }
    }

    public function getImageFile()
    {
        return $this->imageFile;
    }


}
