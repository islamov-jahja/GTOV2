<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RegistrationToken
 *
 * @ORM\Table(name="registration_token")
 * @ORM\Entity
 */
class RegistrationToken
{
    /**
     * @var int
     *
     * @ORM\Column(name="registration_token_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $registrationTokenId;

    /**
     * @var string
     *
     * @ORM\Column(name="token", type="string", length=2000, nullable=false)
     */
    private $token;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateTimeToDelete", type="datetime", nullable=false)
     */
    private $datetimetodelete;

    public function getRegistrationTokenId(): ?int
    {
        return $this->registrationTokenId;
    }

    public function getToken(): ?string
    {
        return $this->token;
    }

    public function setToken(string $token): self
    {
        $this->token = $token;

        return $this;
    }

    public function getDatetimetodelete(): ?\DateTimeInterface
    {
        return $this->datetimetodelete;
    }

    public function setDatetimetodelete(\DateTimeInterface $datetimetodelete): self
    {
        $this->datetimetodelete = $datetimetodelete;

        return $this;
    }


}
