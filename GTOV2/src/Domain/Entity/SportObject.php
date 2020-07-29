<?php

namespace App\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SportObject
 *
 * @ORM\Table(name="sport_object", indexes={@ORM\Index(name="rfr232", columns={"organization_id"})})
 * @ORM\Entity
 */
class SportObject
{
    /**
     * @var int
     *
     * @ORM\Column(name="sport_object_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $sportObjectId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=1000, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=1000, nullable=false)
     */
    private $address;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=1000, nullable=true)
     */
    private $description;

    /**
     * @var Organization
     *
     * @ORM\ManyToOne(targetEntity="Organization")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="organization_id", referencedColumnName="organization_id")
     * })
     */
    private $organization;

    public function getSportObjectId(): ?int
    {
        return $this->sportObjectId;
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

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;

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
