<?php

namespace App\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SecretaryOnOrganization
 *
 * @ORM\Table(name="secretary_on_organization", indexes={@ORM\Index(name="eiury112", columns={"user_id"}), @ORM\Index(name="orgERe214", columns={"organization_id"})})
 * @ORM\Entity
 */
class SecretaryOnOrganization
{
    /**
     * @var int
     *
     * @ORM\Column(name="secretary_on_organization_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $secretaryOnOrganizationId;

    /**
     * @var User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="user_id")
     * })
     */
    private $user;

    /**
     * @var Organization
     *
     * @ORM\ManyToOne(targetEntity="Organization")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="organization_id", referencedColumnName="organization_id")
     * })
     */
    private $organization;

    public function getSecretaryOnOrganizationId(): ?int
    {
        return $this->secretaryOnOrganizationId;
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

    public function getOrganization(): ?Organization
    {
        return $this->organization;
    }

    public function setOrganization(?Organization $organization): self
    {
        $this->organization = $organization;

        return $this;
    }
}
