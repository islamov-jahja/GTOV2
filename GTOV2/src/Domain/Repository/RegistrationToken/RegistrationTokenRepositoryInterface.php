<?php


namespace App\Domain\Repository\RegistrationToken;


use App\Domain\Entity\RegistrationToken;
use App\Helper\Filter\RegistrationTokenFilter;

interface RegistrationTokenRepositoryInterface
{
    /**
     * @param RegistrationToken $registrationToken
     * @return RegistrationToken
     */
    public function add(RegistrationToken $registrationToken): RegistrationToken;

    /**
     * @param RegistrationTokenFilter $registrationTokenFilter
     * @return RegistrationToken
     */
    public function getBy(RegistrationTokenFilter $registrationTokenFilter): RegistrationToken;
}