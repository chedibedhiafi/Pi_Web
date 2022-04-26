<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * Event
 *
 * @ORM\Table(name="event")
 * @ORM\Entity(repositoryClass="App\Repository\EventRepository")
 * @Vich\Uploadable
 */
class Event
{
    /**
     * @var int
     *
     * @ORM\Column(name="Event_Id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $eventId;
    /**
     * @var string
     *
     * @Assert\NotBlank(message="veuillez entrer le nombre de places")
     * @ORM\Column(name="Nb_Places", type="string", length=10, nullable=false)
     */
    private $nbPlaces;

    /**
     * @var \DateTime
     * @Assert\GreaterThanOrEqual("today",message = " la date doit etre > a celle d'aujourd hui ")
     * @ORM\Column(name="Date_Event", type="date", nullable=false)
     */
    private $dateEvent;

    /**
     * @var string
     * @Assert\NotBlank(message="veuillez entre le titre de votre evenement")
     * @Assert\Length(
     *     min = 5,
     *     minMessage="Entrez un titre au min de 5 caracteres"
     *
     * )
     * @ORM\Column(type="string" , length=255)
     */
    private $titre;

    /**
     * @var string
     ** @Assert\NotBlank(message="veuillez entrer le prix de votre evenement")
     * @Assert\Length(
     *     min = 1,
     *     minMessage="Entrez un prix au min de 1 caracteres"
     *
     * )
     * @ORM\Column(name="Prix", type="string", length=11, nullable=false)
     */
    private $prix;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Image", type="string", length=254, nullable=false)
     */
    private $image;
    /**
     * @Vich\UploadableField(mapping="product_images", fileNameProperty="image")
     * @var File
     */
    private $imageFile;

    /**
     * @var string|null
     * @Assert\NotBlank(message="veuillez entrer votre description de levenement")
     * @Assert\Length(
     *     min=7,
     *     max = 100,
     *     minMessage = "Entrez une description >=7",
     *     maxMessage = "Entrez une description <=100")
     * @ORM\Column(name="Description", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $description = 'NULL';

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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function __toString() {
        return $this->titre;
    }
}
