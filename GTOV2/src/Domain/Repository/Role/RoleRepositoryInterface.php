<?php


namespace App\Domain\Repository\Role;


use App\Domain\Entity\Role;
use App\Helper\Filter\RoleFilter;

interface RoleRepositoryInterface
{
    /**
     * @param RoleFilter $roleFilter
     * @return Role
     */
    public function getBy(RoleFilter $roleFilter): Role;

    /**@return Role[]*/
    public function getAll(): array ;
}