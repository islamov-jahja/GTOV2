<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Role
 *
 * @ORM\Table(name="role")
 * @ORM\Entity
 */
class Role
{
    /**
     * @var int
     *
     * @ORM\Column(name="role_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $roleId;

    /**
     * @var string
     *
     * @ORM\Column(name="name_of_role", type="string", length=255, nullable=false)
     */
    private $nameOfRole;

    public function getRoleId(): ?int
    {
        return $this->roleId;
    }

    public function getNameOfRole(): ?string
    {
        return $this->nameOfRole;
    }

    public function setNameOfRole(string $nameOfRole): self
    {
        $this->nameOfRole = $nameOfRole;

        return $this;
    }


}
