<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RefereeOnOrganization
 *
 * @ORM\Table(name="referee_on_organization")
 * @ORM\Entity
 */
class RefereeOnOrganization
{
    /**
     * @var int
     *
     * @ORM\Column(name="referee_on_organization_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $refereeOnOrganizationId;

    /**
     * @var int
     *
     * @ORM\Column(name="organization_id", type="integer", nullable=false)
     */
    private $organizationId;

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     */
    private $userId;

    public function getRefereeOnOrganizationId(): ?int
    {
        return $this->refereeOnOrganizationId;
    }

    public function getOrganizationId(): ?int
    {
        return $this->organizationId;
    }

    public function setOrganizationId(int $organizationId): self
    {
        $this->organizationId = $organizationId;

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
}
