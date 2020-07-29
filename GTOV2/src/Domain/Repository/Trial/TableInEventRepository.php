<?php


namespace App\Domain\Repository\Trial;


use App\Domain\Entity\TableInEvent;
use App\Helper\Filter\TableInEventFilter;

interface TableInEventRepository
{
    /**
     * @param TableInEventFilter $tableInEventFilter
     * @return TableInEvent
     */
    public function getBy(TableInEventFilter $tableInEventFilter): TableInEvent;

    /**
     * @return TableInEvent[]
     */
    public function getAll(): array ;

    /**
     * @param TableInEvent $tableInEvent
     * @return TableInEvent
     */
    public function add(TableInEvent $tableInEvent): TableInEvent;
}