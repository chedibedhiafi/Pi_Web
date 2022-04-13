<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 *
 * @ORM\Table(name="client", indexes={@ORM\Index(name="Fk_Reserv", columns={"Fk_Reserv"})})
 * @ORM\Entity
 */
class Client
{
    /**
     * @var int
     *
     * @ORM\Column(name="Client_Id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $clientId;

    /**
     * @var string
     *
     * @ORM\Column(name="Historique_Achat", type="string", length=11, nullable=false)
     */
    private $historiqueAchat;

    /**
     * @var int
     *
     * @ORM\Column(name="Fk_Reserv", type="integer", nullable=false)
     */
    private $fkReserv;

    public function getClientId(): ?int
    {
        return $this->clientId;
    }

    public function getHistoriqueAchat(): ?string
    {
        return $this->historiqueAchat;
    }

    public function setHistoriqueAchat(string $historiqueAchat): self
    {
        $this->historiqueAchat = $historiqueAchat;

        return $this;
    }

    public function getFkReserv(): ?int
    {
        return $this->fkReserv;
    }

    public function setFkReserv(int $fkReserv): self
    {
        $this->fkReserv = $fkReserv;

        return $this;
    }


}
