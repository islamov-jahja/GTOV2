<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Secretary
 *
 * @ORM\Table(name="secretary", uniqueConstraints={@ORM\UniqueConstraint(name="uniqueS", columns={"user_id", "event_id"})}, indexes={@ORM\Index(name="eventidddd", columns={"event_id"}), @ORM\Index(name="IDX_83D203DEA76ED395", columns={"user_id"})})
 * @ORM\Entity
 */
class Secretary
{
    /**
     * @var int
     *
     * @ORM\Column(name="secretary_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $secretaryId;

    /**
     * @var Event
     *
     * @ORM\ManyToOne(targetEntity="Event")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="event_id", referencedColumnName="event_id")
     * })
     */
    private $event;

    /**
     * @var User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="user_id")
     * })
     */
    private $user;

    public function getSecretaryId(): ?int
    {
        return $this->secretaryId;
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
