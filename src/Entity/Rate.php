<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rate
 *
 * @ORM\Table(name="rate")
 * @ORM\Entity
 */
class Rate
{
    /**
     * @var int
     *
     * @ORM\Column(name="Rate_Id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $rateId;

    /**
     * @var int
     *
     * @ORM\Column(name="Event_Id", type="integer", nullable=false)
     */
    private $eventId;

    /**
     * @var int
     *
     * @ORM\Column(name="Client_Id", type="integer", nullable=false)
     */
    private $clientId;

    /**
     * @var float
     *
     * @ORM\Column(name="Sum", type="float", precision=10, scale=0, nullable=false)
     */
    private $sum;

    public function getRateId(): ?int
    {
        return $this->rateId;
    }

    public function getEventId(): ?int
    {
        return $this->eventId;
    }

    public function setEventId(int $eventId): self
    {
        $this->eventId = $eventId;

        return $this;
    }

    public function getClientId(): ?int
    {
        return $this->clientId;
    }

    public function setClientId(int $clientId): self
    {
        $this->clientId = $clientId;

        return $this;
    }

    public function getSum(): ?float
    {
        return $this->sum;
    }

    public function setSum(float $sum): self
    {
        $this->sum = $sum;

        return $this;
    }


}
