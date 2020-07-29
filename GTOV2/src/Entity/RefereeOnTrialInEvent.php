<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RefereeOnTrialInEvent
 *
 * @ORM\Table(name="referee_on_trial_in_event", indexes={@ORM\Index(name="rgtrg", columns={"trial_in_event_id"})})
 * @ORM\Entity
 */
class RefereeOnTrialInEvent
{
    /**
     * @var int
     *
     * @ORM\Column(name="referee_on_trial_in_event_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $refereeOnTrialInEventId;

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     */
    private $userId;

    /**
     * @var \TrialInEvent
     *
     * @ORM\ManyToOne(targetEntity="TrialInEvent")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="trial_in_event_id", referencedColumnName="trial_in_event_id")
     * })
     */
    private $trialInEvent;

    public function getRefereeOnTrialInEventId(): ?int
    {
        return $this->refereeOnTrialInEventId;
    }

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function setUserId(int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    public function getTrialInEvent(): ?TrialInEvent
    {
        return $this->trialInEvent;
    }

    public function setTrialInEvent(?TrialInEvent $trialInEvent): self
    {
        $this->trialInEvent = $trialInEvent;

        return $this;
    }


}
