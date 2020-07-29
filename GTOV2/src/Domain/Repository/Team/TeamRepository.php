<?php


namespace App\Domain\Repository\Team;


use App\Domain\Entity\Team;
use App\Helper\Filter\TeamFilter;

interface TeamRepository
{
    /**
     * @param TeamFilter $teamFilter
     * @return Team
     */
    public function getBy(TeamFilter $teamFilter): Team;

    /**
     * @param TeamFilter $teamFilter
     * @return array
     */
    public function getAllFilteredBy(TeamFilter $teamFilter): array ;

    /**
     * @param TeamFilter $teamFilter
     */
    public function delete(TeamFilter $teamFilter): void;

    /**
     * @param Team $team
     * @return Team
     */
    public function update(Team $team): Team;
}