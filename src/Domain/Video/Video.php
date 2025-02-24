<?php

namespace Alura\Calisthenics\Domain\Video;

class Video
{
    private bool $visible = false;
    private int $ageLimit;

    public function publish(): void{
        $this->visible = true;
    }

    public function isPublic(): int
    {
        return $this->visible;
    }

    /* Validar se o video é public ou privado para alterar a visibilidade antes de publicar - Não é necessario */
    // public function checkIfVisibilityIsValidAndUpdateIt(int $visibility): void
    // {
    //     if (in_array($visibility, [self::PUBLIC, self::PRIVATE])) {
    //         $this->visible = $visibility;
    //     } else {
    //         throw new \InvalidArgumentException('Invalid visibility');
    //     }
    // }

    public function getAgeLimit(): int
    {
        return $this->ageLimit;
    }

    public function setAgeLimit(int $ageLimit): void
    {
        $this->ageLimit = $ageLimit;
    }
}
