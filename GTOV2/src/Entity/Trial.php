<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trial
 *
 * @ORM\Table(name="trial")
 * @ORM\Entity
 */
class Trial
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_trial", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTrial;

    /**
     * @var string
     *
     * @ORM\Column(name="trial", type="string", length=255, nullable=false)
     */
    private $trial;

    /**
     * @var bool
     *
     * @ORM\Column(name="type_time", type="boolean", nullable=false)
     */
    private $typeTime;

    /**
     * @var int
     *
     * @ORM\Column(name="id_version_standard", type="integer", nullable=false)
     */
    private $idVersionStandard;

    public function getIdTrial(): ?int
    {
        return $this->idTrial;
    }

    public function getTrial(): ?string
    {
        return $this->trial;
    }

    public function setTrial(string $trial): self
    {
        $this->trial = $trial;

        return $this;
    }

    public function getTypeTime(): ?bool
    {
        return $this->typeTime;
    }

    public function setTypeTime(bool $typeTime): self
    {
        $this->typeTime = $typeTime;

        return $this;
    }

    public function getIdVersionStandard(): ?int
    {
        return $this->idVersionStandard;
    }

    public function setIdVersionStandard(int $idVersionStandard): self
    {
        $this->idVersionStandard = $idVersionStandard;

        return $this;
    }


}
