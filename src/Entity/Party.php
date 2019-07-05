<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PartyRepository")
 */
class Party
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     *
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="integer")
     */
    private $date;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $location;
    /**
     * @var Person[]|ArrayCollection
     * @ORM\ManyToMany(targetEntity="Person", inversedBy="parties")
     */
    private $participants;

    /**
     * @var Bill[]|ArrayCollection
     * @ORM\OneToMany(targetEntity="Bill", mappedBy="party")
     */
    private $bills;

    public function __construct()
    {
        $this->participants = new ArrayCollection();
    }

    public function __toString()
    {
        return $this->name;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDate(): ?int
    {
        return $this->date;
    }

    public function setDate(int $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(?string $location): self
    {
        $this->location = $location;

        return $this;
    }

    /**
     * @return Person[]|ArrayCollection
     */
    public function getParticipants()
    {
        return $this->participants;
    }

    /**
     * @param Person[]|ArrayCollection $participants
     */
    public function setParticipants($participants): void
    {
        $this->participants = $participants;
    }

    public function addParticipant($participant)
    {
        if (!$this->participants->contains($participant)) {
            $this->participants->add($participant);
        }
    }
    public function removeParticipant($participant)
    {
        if ($this->participants->contains($participant)) {
            $this->participants->removeElement($participant);
        }
    }
    public function addBill($bill)
    {
        if (!$this->bills->contains($bill)) {
            $this->bills->add($bill);
        }
    }

    public function removeBill($bill)
    {
        if ($this->bills->contains($bill)) {
            $this->bills->removeElement($bill);
        }
    }
}
