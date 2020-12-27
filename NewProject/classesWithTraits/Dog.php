<?php

namespace NewProject\NewProject\classesWithTraits;

use NewProject\NewProject\traits\Animal;
use NewProject\NewProject\traits\ExtendedAnimal;

require_once __DIR__ . "/../traits/Animal.php";
require_once __DIR__ . "/../traits/ExtendedAnimal.php";

class Dog
{
    use Animal;
    use ExtendedAnimal;

    private int $barkDistance;

    public function __construct(int $age, string $color, string $sex, int $barkDistance)
    {
        $this->age = $age;
        $this->color = $color;
        $this->sex = $sex;
        $this->barkDistance = $barkDistance;
    }
}