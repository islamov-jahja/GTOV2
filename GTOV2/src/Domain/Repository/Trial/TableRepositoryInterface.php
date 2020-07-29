<?php


namespace App\Domain\Repository\Trial;


use App\Domain\Entity\ResultGuide;
use App\Domain\Entity\VersionStandard;
use App\Helper\Filter\TableFilter;

interface TableRepositoryInterface
{
    /**
     * @param TableFilter $tableFilter
     * @return VersionStandard
     */
    public function getBy(TableFilter $tableFilter): VersionStandard;

    /**
     * @return VersionStandard[]
     */
    public function getAll(): array ;
}