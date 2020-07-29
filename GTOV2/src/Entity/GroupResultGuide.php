<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GroupResultGuide
 *
 * @ORM\Table(name="group_result_guide")
 * @ORM\Entity
 */
class GroupResultGuide
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_group_result_guide", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idGroupResultGuide;

    /**
     * @var bool
     *
     * @ORM\Column(name="id_age_category", type="boolean", nullable=false)
     */
    private $idAgeCategory;

    /**
     * @var bool
     *
     * @ORM\Column(name="necessarily", type="boolean", nullable=false)
     */
    private $necessarily;

    /**
     * @var int
     *
     * @ORM\Column(name="id_group_in_age_category", type="integer", nullable=false)
     */
    private $idGroupInAgeCategory;

    public function getIdGroupResultGuide(): ?int
    {
        return $this->idGroupResultGuide;
    }

    public function getIdAgeCategory(): ?bool
    {
        return $this->idAgeCategory;
    }

    public function setIdAgeCategory(bool $idAgeCategory): self
    {
        $this->idAgeCategory = $idAgeCategory;

        return $this;
    }

    public function getNecessarily(): ?bool
    {
        return $this->necessarily;
    }

    public function setNecessarily(bool $necessarily): self
    {
        $this->necessarily = $necessarily;

        return $this;
    }

    public function getIdGroupInAgeCategory(): ?int
    {
        return $this->idGroupInAgeCategory;
    }

    public function setIdGroupInAgeCategory(int $idGroupInAgeCategory): self
    {
        $this->idGroupInAgeCategory = $idGroupInAgeCategory;

        return $this;
    }
}
