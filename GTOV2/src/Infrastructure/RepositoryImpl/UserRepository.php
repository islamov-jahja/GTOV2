<?php


namespace App\Infrastructure\RepositoryImpl;


use App\Domain\Entity\User;
use App\Domain\Repository\User\UserRepositoryInterface;
use App\Helper\Filter\UserFilter;

class UserRepository implements UserRepositoryInterface
{

    public function add(User $user): User
    {
        // TODO: Implement add() method.
    }

    public function getBy(UserFilter $userFilter): User
    {
        // TODO: Implement getBy() method.
    }

    public function getAll(): array
    {
        // TODO: Implement getAll() method.
    }

    public function delete(UserFilter $userFilter): void
    {
        // TODO: Implement delete() method.
    }

    public function update(User $user): User
    {
        // TODO: Implement update() method.
    }
}