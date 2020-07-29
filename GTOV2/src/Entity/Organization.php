<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Organization
 *
 * @ORM\Table(name="organization")
 * @ORM\Entity
 */
class Organization
{
    /**
     * @var int
     *
     * @ORM\Column(name="organization_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $organizationId;

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
     * @var string
     *
     * @ORM\Column(name="leader", type="string", length=1000, nullable=false)
     */
    private $leader;

    /**
     * @var string
     *
     * @ORM\Column(name="phone_number", type="string", length=1000, nullable=false)
     */
    private $phoneNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="OQRN", type="string", length=1000, nullable=false)
     */
    private $oqrn;

    /**
     * @var string
     *
     * @ORM\Column(name="payment_account", type="string", length=1000, nullable=false)
     */
    private $paymentAccount;

    /**
     * @var string
     *
     * @ORM\Column(name="branch", type="string", length=1000, nullable=false)
     */
    private $branch;

    /**
     * @var string
     *
     * @ORM\Column(name="bik", type="string", length=1000, nullable=false)
     */
    private $bik;

    /**
     * @var string
     *
     * @ORM\Column(name="correspondent_account", type="string", length=1000, nullable=false)
     */
    private $correspondentAccount;

    public function getOrganizationId(): ?int
    {
        return $this->organizationId;
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

    public function getLeader(): ?string
    {
        return $this->leader;
    }

    public function setLeader(string $leader): self
    {
        $this->leader = $leader;

        return $this;
    }

    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber;
    }

    public function setPhoneNumber(string $phoneNumber): self
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    public function getOqrn(): ?string
    {
        return $this->oqrn;
    }

    public function setOqrn(string $oqrn): self
    {
        $this->oqrn = $oqrn;

        return $this;
    }

    public function getPaymentAccount(): ?string
    {
        return $this->paymentAccount;
    }

    public function setPaymentAccount(string $paymentAccount): self
    {
        $this->paymentAccount = $paymentAccount;

        return $this;
    }

    public function getBranch(): ?string
    {
        return $this->branch;
    }

    public function setBranch(string $branch): self
    {
        $this->branch = $branch;

        return $this;
    }

    public function getBik(): ?string
    {
        return $this->bik;
    }

    public function setBik(string $bik): self
    {
        $this->bik = $bik;

        return $this;
    }

    public function getCorrespondentAccount(): ?string
    {
        return $this->correspondentAccount;
    }

    public function setCorrespondentAccount(string $correspondentAccount): self
    {
        $this->correspondentAccount = $correspondentAccount;

        return $this;
    }
}
