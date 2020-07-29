<?php


namespace App\Repository\User;


use App\Domain\Entity\User;
use App\Filter\UserFilter;

interface UserRepositoryInterface
{
    /**@
     * @param UserFilter $userFilter
     * @return User
     */
    public function getBy(UserFilter $userFilter): User;

    /**
     * @return User[]
     */
    public function getAll(): array ;

    /**@
     * @param UserFilter $userFilter
     */
    public function delete(UserFilter $userFilter): void ;

    /**
     * @param User $user
     * @return void
     */
    public function update(User $user): void ;
}