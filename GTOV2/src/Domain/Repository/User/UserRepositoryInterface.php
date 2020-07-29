<?php


namespace App\Domain\Repository\User;


use App\Domain\Entity\User;
use App\Helper\Filter\UserFilter;

interface UserRepositoryInterface
{
    /**
     * @param User $user
     * @return User
     */
    public function add(User $user): User;

    /**
     * @param UserFilter $userFilter
     * @return User
     */
    public function getBy(UserFilter $userFilter): User;

    /**
     * @return User[]
     */
    public function getAll(): array ;

    /**
     * @param UserFilter $userFilter
     */
    public function delete(UserFilter $userFilter): void ;

    /**
     * @param User $user
     * @return User
     */
    public function update(User $user): User ;
}