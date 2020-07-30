<?php


namespace App\Domain\Repository\Result;


use App\Domain\Entity\ResultGuide;
use App\Domain\Entity\ResultOnTrialInEvent;
use App\Helper\Filter\ResultFilter;

interface ResultRepositoryInterface
{
    /**
     * @param ResultOnTrialInEvent $result
     * @return ResultOnTrialInEvent
     */
    public function add(ResultOnTrialInEvent $result): ResultOnTrialInEvent;

    /**
     * @param ResultFilter $resultFilter
     * @return ResultOnTrialInEvent
     */
    public function getBy(ResultFilter $resultFilter): ResultOnTrialInEvent;

    /**
     * @param ResultOnTrialInEvent $resultOnTrialInEvent
     * @return ResultOnTrialInEvent
     */
    public function update(ResultOnTrialInEvent $resultOnTrialInEvent): ResultOnTrialInEvent;
}