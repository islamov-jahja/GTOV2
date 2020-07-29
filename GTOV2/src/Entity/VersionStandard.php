<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VersionStandard
 *
 * @ORM\Table(name="version_standard")
 * @ORM\Entity
 */
class VersionStandard
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_version_standard", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idVersionStandard;

    /**
     * @var string
     *
     * @ORM\Column(name="version", type="string", length=255, nullable=false)
     */
    private $version;

    /**
     * @var int
     *
     * @ORM\Column(name="path_file", type="integer", nullable=false)
     */
    private $pathFile;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_update", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $dateUpdate = 'CURRENT_TIMESTAMP';

    public function getIdVersionStandard(): ?int
    {
        return $this->idVersionStandard;
    }

    public function getVersion(): ?string
    {
        return $this->version;
    }

    public function setVersion(string $version): self
    {
        $this->version = $version;

        return $this;
    }

    public function getPathFile(): ?int
    {
        return $this->pathFile;
    }

    public function setPathFile(int $pathFile): self
    {
        $this->pathFile = $pathFile;

        return $this;
    }

    public function getDateUpdate(): ?\DateTimeInterface
    {
        return $this->dateUpdate;
    }

    public function setDateUpdate(\DateTimeInterface $dateUpdate): self
    {
        $this->dateUpdate = $dateUpdate;

        return $this;
    }
}
