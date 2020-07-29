<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LocalAdmin
 *
 * @ORM\Table(name="local_admin", uniqueConstraints={@ORM\UniqueConstraint(name="uniqueOU", columns={"user_id", "organization_id"})}, indexes={@ORM\Index(name="organizationId", columns={"organization_id"}), @ORM\Index(name="IDX_97E89172A76ED395", columns={"user_id"})})
 * @ORM\Entity
 */
class LocalAdmin
{
    /**
     * @var int
     *
     * @ORM\Column(name="local_admin_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $localAdminId;

    /**
     * @var Organization
     *
     * @ORM\ManyToOne(targetEntity="Organization")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="organization_id", referencedColumnName="organization_id")
     * })
     */
    private $organization;

    /**
     * @var User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="user_id")
     * })
     */
    private $user;

    public function getLocalAdminId(): ?int
    {
        return $this->localAdminId;
    }

    public function getOrganization(): ?Organization
    {
        return $this->organization;
    }

    public function setOrganization(?Organization $organization): self
    {
        $this->organization = $organization;

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
