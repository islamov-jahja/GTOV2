<?php

namespace App\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AgeCategory
 *
 * @ORM\Table(name="age_category")
 * @ORM\Entity
 */
class AgeCategory
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_age_category", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAgeCategory;

    /**
     * @var string
     *
     * @ORM\Column(name="name_age_category", type="string", length=255, nullable=false)
     */
    private $nameAgeCategory;

    /**
     * @var bool
     *
     * @ORM\Column(name="min_age", type="boolean", nullable=false)
     */
    private $minAge;

    /**
     * @var bool
     *
     * @ORM\Column(name="max_age", type="boolean", nullable=false)
     */
    private $maxAge;

    /**
     * @var bool
     *
     * @ORM\Column(name="m_count_tests", type="boolean", nullable=false)
     */
    private $mCountTests;

    /**
     * @var bool
     *
     * @ORM\Column(name="m_count_tests_for_gold", type="boolean", nullable=false)
     */
    private $mCountTestsForGold;

    /**
     * @var bool
     *
     * @ORM\Column(name="m_count_tests_for_silver", type="boolean", nullable=false)
     */
    private $mCountTestsForSilver;

    /**
     * @var bool
     *
     * @ORM\Column(name="m_count_tests_for_bronze", type="boolean", nullable=false)
     */
    private $mCountTestsForBronze;

    /**
     * @var bool
     *
     * @ORM\Column(name="f_count_tests", type="boolean", nullable=false)
     */
    private $fCountTests;

    /**
     * @var bool
     *
     * @ORM\Column(name="f_count_tests_for_gold", type="boolean", nullable=false)
     */
    private $fCountTestsForGold;

    /**
     * @var bool
     *
     * @ORM\Column(name="f_count_tests_for_silver", type="boolean", nullable=false)
     */
    private $fCountTestsForSilver;

    /**
     * @var bool
     *
     * @ORM\Column(name="f_count_tests_for_bronze", type="boolean", nullable=false)
     */
    private $fCountTestsForBronze;

    public function getIdAgeCategory(): ?int
    {
        return $this->idAgeCategory;
    }

    public function getNameAgeCategory(): ?string
    {
        return $this->nameAgeCategory;
    }

    public function setNameAgeCategory(string $nameAgeCategory): self
    {
        $this->nameAgeCategory = $nameAgeCategory;

        return $this;
    }

    public function getMinAge(): ?bool
    {
        return $this->minAge;
    }

    public function setMinAge(bool $minAge): self
    {
        $this->minAge = $minAge;

        return $this;
    }

    public function getMaxAge(): ?bool
    {
        return $this->maxAge;
    }

    public function setMaxAge(bool $maxAge): self
    {
        $this->maxAge = $maxAge;

        return $this;
    }

    public function getMCountTests(): ?bool
    {
        return $this->mCountTests;
    }

    public function setMCountTests(bool $mCountTests): self
    {
        $this->mCountTests = $mCountTests;

        return $this;
    }

    public function getMCountTestsForGold(): ?bool
    {
        return $this->mCountTestsForGold;
    }

    public function setMCountTestsForGold(bool $mCountTestsForGold): self
    {
        $this->mCountTestsForGold = $mCountTestsForGold;

        return $this;
    }

    public function getMCountTestsForSilver(): ?bool
    {
        return $this->mCountTestsForSilver;
    }

    public function setMCountTestsForSilver(bool $mCountTestsForSilver): self
    {
        $this->mCountTestsForSilver = $mCountTestsForSilver;

        return $this;
    }

    public function getMCountTestsForBronze(): ?bool
    {
        return $this->mCountTestsForBronze;
    }

    public function setMCountTestsForBronze(bool $mCountTestsForBronze): self
    {
        $this->mCountTestsForBronze = $mCountTestsForBronze;

        return $this;
    }

    public function getFCountTests(): ?bool
    {
        return $this->fCountTests;
    }

    public function setFCountTests(bool $fCountTests): self
    {
        $this->fCountTests = $fCountTests;

        return $this;
    }

    public function getFCountTestsForGold(): ?bool
    {
        return $this->fCountTestsForGold;
    }

    public function setFCountTestsForGold(bool $fCountTestsForGold): self
    {
        $this->fCountTestsForGold = $fCountTestsForGold;

        return $this;
    }

    public function getFCountTestsForSilver(): ?bool
    {
        return $this->fCountTestsForSilver;
    }

    public function setFCountTestsForSilver(bool $fCountTestsForSilver): self
    {
        $this->fCountTestsForSilver = $fCountTestsForSilver;

        return $this;
    }

    public function getFCountTestsForBronze(): ?bool
    {
        return $this->fCountTestsForBronze;
    }

    public function setFCountTestsForBronze(bool $fCountTestsForBronze): self
    {
        $this->fCountTestsForBronze = $fCountTestsForBronze;

        return $this;
    }
}
