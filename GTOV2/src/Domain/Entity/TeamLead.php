<?php

namespace App\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TeamLead
 *
 * @ORM\Table(name="team_lead", indexes={@ORM\Index(name="teamL", columns={"team_id"}), @ORM\Index(name="userLead", columns={"user_id"})})
 * @ORM\Entity
 */
class TeamLead
{
    /**
     * @var int
     *
     * @ORM\Column(name="team_lead_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $teamLeadId;

    /**
     * @var Team
     *
     * @ORM\ManyToOne(targetEntity="Team")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="team_id", referencedColumnName="team_id")
     * })
     */
    private $team;

    /**
     * @var User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="user_id")
     * })
     */
    private $user;

    public function getTeamLeadId(): ?int
    {
        return $this->teamLeadId;
    }

    public function getTeam(): ?Team
    {
        return $this->team;
    }

    public function setTeam(?Team $team): self
    {
        $this->team = $team;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }
}
