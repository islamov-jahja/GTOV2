<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ResultGuide
 *
 * @ORM\Table(name="result_guide", indexes={@ORM\Index(name="idTrialKey", columns={"id_trial"}), @ORM\Index(name="idAgeCategory", columns={"id_age_category"}), @ORM\Index(name="groupResultGuideKey", columns={"id_group_result_guide"})})
 * @ORM\Entity
 */
class ResultGuide
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_result_guide", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idResultGuide;

    /**
     * @var bool
     *
     * @ORM\Column(name="gender", type="boolean", nullable=false)
     */
    private $gender;

    /**
     * @var string
     *
     * @ORM\Column(name="results", type="string", length=1300, nullable=false)
     */
    private $results;

    /**
     * @var int
     *
     * @ORM\Column(name="id_version", type="integer", nullable=false)
     */
    private $idVersion;

    /**
     * @var string
     *
     * @ORM\Column(name="result_for_gold", type="string", length=10, nullable=false)
     */
    private $resultForGold;

    /**
     * @var string
     *
     * @ORM\Column(name="result_for_silver", type="string", length=10, nullable=false)
     */
    private $resultForSilver;

    /**
     * @var string
     *
     * @ORM\Column(name="result_for_bronze", type="string", length=10, nullable=false)
     */
    private $resultForBronze;

    /**
     * @var GroupResultGuide
     *
     * @ORM\ManyToOne(targetEntity="GroupResultGuide")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_group_result_guide", referencedColumnName="id_group_result_guide")
     * })
     */
    private $idGroupResultGuide;

    /**
     * @var AgeCategory
     *
     * @ORM\ManyToOne(targetEntity="AgeCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_age_category", referencedColumnName="id_age_category")
     * })
     */
    private $idAgeCategory;

    /**
     * @var Trial
     *
     * @ORM\ManyToOne(targetEntity="Trial")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_trial", referencedColumnName="id_trial")
     * })
     */
    private $idTrial;

    public function getIdResultGuide(): ?int
    {
        return $this->idResultGuide;
    }

    public function getGender(): ?bool
    {
        return $this->gender;
    }

    public function setGender(bool $gender): self
    {
        $this->gender = $gender;

        return $this;
    }

    public function getResults(): ?string
    {
        return $this->results;
    }

    public function setResults(string $results): self
    {
        $this->results = $results;

        return $this;
    }

    public function getIdVersion(): ?int
    {
        return $this->idVersion;
    }

    public function setIdVersion(int $idVersion): self
    {
        $this->idVersion = $idVersion;

        return $this;
    }

    public function getResultForGold(): ?string
    {
        return $this->resultForGold;
    }

    public function setResultForGold(string $resultForGold): self
    {
        $this->resultForGold = $resultForGold;

        return $this;
    }

    public function getResultForSilver(): ?string
    {
        return $this->resultForSilver;
    }

    public function setResultForSilver(string $resultForSilver): self
    {
        $this->resultForSilver = $resultForSilver;

        return $this;
    }

    public function getResultForBronze(): ?string
    {
        return $this->resultForBronze;
    }

    public function setResultForBronze(string $resultForBronze): self
    {
        $this->resultForBronze = $resultForBronze;

        return $this;
    }

    public function getIdGroupResultGuide(): ?GroupResultGuide
    {
        return $this->idGroupResultGuide;
    }

    public function setIdGroupResultGuide(?GroupResultGuide $idGroupResultGuide): self
    {
        $this->idGroupResultGuide = $idGroupResultGuide;

        return $this;
    }

    public function getIdAgeCategory(): ?AgeCategory
    {
        return $this->idAgeCategory;
    }

    public function setIdAgeCategory(?AgeCategory $idAgeCategory): self
    {
        $this->idAgeCategory = $idAgeCategory;

        return $this;
    }

    public function getIdTrial(): ?Trial
    {
        return $this->idTrial;
    }

    public function setIdTrial(?Trial $idTrial): self
    {
        $this->idTrial = $idTrial;

        return $this;
    }
}
