<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrialInEvent
 *
 * @ORM\Table(name="trial_in_event", indexes={@ORM\Index(name="re44eg23", columns={"event_id"}), @ORM\Index(name="ergr23", columns={"trial_id"})})
 * @ORM\Entity
 */
class TrialInEvent
{
    /**
     * @var int
     *
     * @ORM\Column(name="trial_in_event_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $trialInEventId;

    /**
     * @var int
     *
     * @ORM\Column(name="sport_object_id", type="integer", nullable=false)
     */
    private $sportObjectId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start_date_time", type="datetime", nullable=false)
     */
    private $startDateTime;

    /**
     * @var Trial
     *
     * @ORM\ManyToOne(targetEntity="Trial")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="trial_id", referencedColumnName="id_trial")
     * })
     */
    private $trial;

    /**
     * @var Event
     *
     * @ORM\ManyToOne(targetEntity="Event")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="event_id", referencedColumnName="event_id")
     * })
     */
    private $event;

    public function getTrialInEventId(): ?int
    {
        return $this->trialInEventId;
    }

    public function getSportObjectId(): ?int
    {
        return $this->sportObjectId;
    }

    public function setSportObjectId(int $sportObjectId): self
    {
        $this->sportObjectId = $sportObjectId;

        return $this;
    }

    public function getStartDateTime(): ?\DateTimeInterface
    {
        return $this->startDateTime;
    }

    public function setStartDateTime(\DateTimeInterface $startDateTime): self
    {
        $this->startDateTime = $startDateTime;

        return $this;
    }

    public function getTrial(): ?Trial
    {
        return $this->trial;
    }

    public function setTrial(?Trial $trial): self
    {
        $this->trial = $trial;

        return $this;
    }

    public function getEvent(): ?Event
    {
        return $this->event;
    }

    public function setEvent(?Event $event): self
    {
        $this->event = $event;

        return $this;
    }
}
