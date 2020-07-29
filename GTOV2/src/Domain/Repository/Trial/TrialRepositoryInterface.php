<?php

namespace App\Domain\Repository\Trial;

use App\Domain\Entity\Trial;
use App\Helper\Filter\TrialFilter;

interface TrialRepositoryInterface
{
    /**
     * @param Trial $trial
     * @return Trial
     */
    public function add(Trial $trial): Trial;

    /**
     * @param TrialFilter $trialFilter
     * @return Trial
     */
    public function getBy(TrialFilter $trialFilter): Trial;

    /**
     * @return Trial[]
     */
    public function getAll(): array ;

    /**
     * @param Trial $trial
     */
    public function update(Trial $trial): void ;

    /**
     * @param TrialFilter $trialFilter
     */
    public function delete(TrialFilter $trialFilter): void ;
}