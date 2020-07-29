<?php
namespace App\Domain\Repository\TeamLead;

use App\Domain\Entity\TeamLead;
use App\Helper\Filter\TeamLeadFilter;

interface TeamLeadRepositoryInterface
{
    /**
     * @param TeamLead $teamLead
     * @return TeamLead
     */
    public function add(TeamLead $teamLead): TeamLead;

    /**
     * @param TeamLeadFilter $teamLeadFilter
     * @return TeamLead
     */
    public function getBy(TeamLeadFilter $teamLeadFilter): TeamLead;

    /**
     * @return TeamLead[]
     */
    public function getAll(): array ;

    /**
     * @param TeamLeadFilter $teamLeadFilter
     */
    public function delete(TeamLeadFilter $teamLeadFilter): void;
}