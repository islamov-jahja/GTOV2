<?php

namespace App\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ResultOnTrialInEvent
 *
 * @ORM\Table(name="result_on_trial_in_event")
 * @ORM\Entity
 */
class ResultOnTrialInEvent
{
    /**
     * @var int
     *
     * @ORM\Column(name="result_on_trial_in_event_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $resultOnTrialInEventId;

    /**
     * @var int
     *
     * @ORM\Column(name="trial_in_event_id", type="integer", nullable=false)
     */
    private $trialInEventId;

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     */
    private $userId;

    /**
     * @var int
     *
     * @ORM\Column(name="id_result_guide", type="integer", nullable=false)
     */
    private $idResultGuide;

    /**
     * @var string|null
     *
     * @ORM\Column(name="first_result", type="string", length=255, nullable=true)
     */
    private $firstResult;

    /**
     * @var int|null
     *
     * @ORM\Column(name="second_result", type="integer", nullable=true)
     */
    private $secondResult;

    /**
     * @var string|null
     *
     * @ORM\Column(name="badge", type="string", length=0, nullable=true)
     */
    private $badge;

    public function getResultOnTrialInEventId(): ?int
    {
        return $this->resultOnTrialInEventId;
    }

    public function getTrialInEventId(): ?int
    {
        return $this->trialInEventId;
    }

    public function setTrialInEventId(int $trialInEventId): self
    {
        $this->trialInEventId = $trialInEventId;

        return $this;
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

    public function getIdResultGuide(): ?int
    {
        return $this->idResultGuide;
    }

    public function setIdResultGuide(int $idResultGuide): self
    {
        $this->idResultGuide = $idResultGuide;

        return $this;
    }

    public function getFirstResult(): ?string
    {
        return $this->firstResult;
    }

    public function setFirstResult(?string $firstResult): self
    {
        $this->firstResult = $firstResult;

        return $this;
    }

    public function getSecondResult(): ?int
    {
        return $this->secondResult;
    }

    public function setSecondResult(?int $secondResult): self
    {
        $this->secondResult = $secondResult;

        return $this;
    }

    public function getBadge(): ?string
    {
        return $this->badge;
    }

    public function setBadge(?string $badge): self
    {
        $this->badge = $badge;

        return $this;
    }
}
