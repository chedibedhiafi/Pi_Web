<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Utilisateur
 *
 * @ORM\Table(name="utilisateur")
 * @ORM\Entity
 * @UniqueEntity(fields={"username","email"}, message="Cet utilisateur est déjà existant")
 */
class Utilisateur implements UserInterface
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=255)
     * @Assert\NotBlank(message="Le champ du login doit etre non vide")
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="mdp", type="string", length=255)
     * @Assert\NotBlank(message="Le champ du mot de passe doit etre non vide")
     * @Assert\Length(min="8",minMessage="Le mot de passe doit être un minimum de 8 caractères")
     */
    private $password;

    /** 
    * @Assert\EqualTo(propertyPath="password",message="Vous n'avez pas tapé le même mot de passe")
     */
    public $mdpC;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_naissance", type="date")
     * @Assert\LessThan("-10 years", message="Age minimal 10 ans")
     */
    private $dateNaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     * @Assert\NotBlank(message="Le champ du nom doit etre non vide")
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     * @Assert\NotBlank(message="Le champ du prenom doit etre non vide")
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     * @Assert\NotBlank(message="Le champ de l'email doit etre non vide")
     * @Assert\Email(message = "The email '{{ value }}' is not a valid email.")
     */
    private $email;

    /**
     * @var int
     *
     * @ORM\Column(name="tentative", type="integer")
     */
    private $tentative;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="unlock_date", type="date")
     */
    private $unlockDate;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $activation_token;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $reset_token;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getDateNaissance(): ?\DateTimeInterface
    {
        return $this->dateNaissance;
    }

    public function setDateNaissance(\DateTimeInterface $dateNaissance): self
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
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

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getTentative(): ?int
    {
        return $this->tentative;
    }

    public function setTentative(int $tentative): self
    {
        $this->tentative = $tentative;

        return $this;
    }

    public function getUnlockDate(): ?\DateTimeInterface
    {
        return $this->unlockDate;
    }

    public function setUnlockDate(\DateTimeInterface $unlockDate): self
    {
        $this->unlockDate = $unlockDate;

        return $this;
    }

    public function eraseCredentials()
    {
        
    }

    public function getSalt()
    {
        
    }

    public function getRoles()
    {
        return ['ROLE_USER'];
    }

    public function __toString()
{
    return $this->username . ', ' . $this->dateNaissance|date('yyyy/mm/dd') . ', '. $this->email . ', ';
}

    public function getActivationToken(): ?string
    {
        return $this->activation_token;
    }

    public function setActivationToken(?string $activation_token): self
    {
        $this->activation_token = $activation_token;

        return $this;
    }

    public function getResetToken(): ?string
    {
        return $this->reset_token;
    }

    public function setResetToken(?string $reset_token): self
    {
        $this->reset_token = $reset_token;

        return $this;
    }

    protected $captchaCode;
    
    public function getCaptchaCode()
    {
        return $this->captchaCode;
    }

    public function setCaptchaCode($captchaCode)
    {
        $this->captchaCode = $captchaCode;
    }


}
