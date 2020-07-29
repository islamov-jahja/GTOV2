<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PathToPhotoOfUser
 *
 * @ORM\Table(name="path_to_photo_of_user")
 * @ORM\Entity
 */
class PathToPhotoOfUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="path_to_photo_of_user_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pathToPhotoOfUserId;

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="path", type="string", length=2000, nullable=false)
     */
    private $path;

    public function getPathToPhotoOfUserId(): ?int
    {
        return $this->pathToPhotoOfUserId;
    }

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function setUserId(int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    public function getPath(): ?string
    {
        return $this->path;
    }

    public function setPath(string $path): self
    {
        $this->path = $path;

        return $this;
    }


}
