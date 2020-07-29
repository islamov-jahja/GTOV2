<?php


namespace App\Domain\Repository\Trial;


use App\Domain\Entity\TrialInEvent;
use App\Helper\Filter\TrialInEventFilter;

interface TrialInEventRepositoryInterface
{
    /**
     * @param TrialInEventFilter $trialInEventFilter
     * @return TrialInEvent
     */
    public function getBy(TrialInEventFilter $trialInEventFilter): TrialInEvent;

    /**
     * @param TrialInEvent $trialInEvent
     * @return TrialInEvent
     */
    public function add(TrialInEvent $trialInEvent): TrialInEvent;

    /**
     * @param TrialInEventFilter $trialInEventFilter
     */
    public function delete(TrialInEventFilter $trialInEventFilter): void ;
}