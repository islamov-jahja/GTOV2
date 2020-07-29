<?php


namespace App\Domain\Repository\SportObject;


use App\Domain\Entity\SportObject;
use App\Helper\Filter\SportObjectFilter;

interface SportObjectRepositoryInterface
{
    /**
     * @param SportObject $sportObject
     * @return SportObject
     */
    public function add(SportObject $sportObject): SportObject;

    /**
     * @param SportObjectFilter $sportObjectFilter
     * @return SportObject
     */
    public function getBy(SportObjectFilter $sportObjectFilter): SportObject;

    /**
     * @return SportObject[]
     */
    public function getAll(): array ;

    /**
     * @param SportObject $sportObject
     * @return SportObject
     */
    public function update(SportObject $sportObject): SportObject;

    /**
     * @param SportObjectFilter $sportObjectFilter
     */
    public function delete(SportObjectFilter $sportObjectFilter): void ;
}