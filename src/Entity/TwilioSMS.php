<?php

namespace App\Entity;


use App\Repository\TwilioSMSRepository;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Produitcommande;

/**
 * @ORM\Entity(repositoryClass=TwilioSMSRepository::class)
 */
class TwilioSMS
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $account_sid = 'AC268d223c5f0e79618f2a405830ee9353';

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $auth_token = 'c8e75eafe1faaacecc5f2ba1791e0691';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAccountSid(): ?string
    {
        return $this->account_sid;
    }

    public function setAccountSid(string $account_sid): self
    {
        $this->account_sid = $account_sid;

        return $this;
    }

    public function getAuthToken(): ?string
    {
        return $this->auth_token;
    }

    public function setAuthToken(string $auth_token): self
    {
        $this->auth_token = $auth_token;

        return $this;
    }
}
