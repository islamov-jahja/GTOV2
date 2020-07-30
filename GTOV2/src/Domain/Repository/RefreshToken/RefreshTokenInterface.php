<?php


namespace App\Domain\Repository\RefreshToken;


use App\Domain\Entity\RefreshToken;
use App\Helper\Filter\RefreshTokenFilter;

interface RefreshTokenInterface
{
    /**
     * @param RefreshTokenFilter $refreshTokenFilter
     * @return RefreshToken
     */
    public function getBy(RefreshTokenFilter $refreshTokenFilter): RefreshToken;

    /**
     * @param RefreshToken $refreshToken
     * @return RefreshToken
     */
    public function add(RefreshToken $refreshToken): RefreshToken;

    /**
     * @param RefreshToken $refreshToken
     * @return RefreshToken
     */
    public function update(RefreshToken $refreshToken): RefreshToken;

    /**
     * @param RefreshTokenFilter $refreshTokenFilter
     * @return void
     */
    public function delete(RefreshTokenFilter $refreshTokenFilter): void ;
}