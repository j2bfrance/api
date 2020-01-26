<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\ServiceRepository")
 */
class Service
{
  const ATTENDEE_TICKET_KIND = 'attendee_ticket';
  const PUBLIC_TICKET_KIND = 'public_ticket';
  const BEER_TICKET_KIND = 'beer_ticket';
  const VOLUNTEER_TICKET_KIND = 'volunteer_ticket';

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="smallint")
     */
    private $number_ticket;

    /**
     * @ORM\Column(type="smallint")
     */
    private $price_by_ticket;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $kind;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $nosql;

    /**
     * @var Event The event this service.
     *
     * @ORM\ManyToOne(targetEntity="Event", inversedBy="services")
     */
    public $event;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

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

    public function getNumberTicket(): ?int
    {
        return $this->number_ticket;
    }

    public function setNumberTicket(int $number_ticket): self
    {
        $this->number_ticket = $number_ticket;

        return $this;
    }

    public function getPriceByTicket(): ?int
    {
        return $this->price_by_ticket;
    }

    public function setPriceByTicket(int $price_by_ticket): self
    {
        $this->price_by_ticket = $price_by_ticket;

        return $this;
    }

    public function getKind(): ?string
    {
        return $this->kind;
    }

    public function setKind(string $kind): self
    {
        $this->kind = $kind;

        return $this;
    }

    public function getNosql(): ?string
    {
        return $this->nosql;
    }

    public function setNosql(?string $nosql): self
    {
        $this->nosql = $nosql;

        return $this;
    }
}
