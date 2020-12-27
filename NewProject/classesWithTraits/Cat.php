<?php

namespace NewProject\NewProject\classesWithTraits;

use NewProject\NewProject\traits\Animal;
use NewProject\NewProject\traits\ExtendedAnimal;

require_once __DIR__ . "/../traits/Animal.php";
require_once __DIR__ . "/../traits/ExtendedAnimal.php";

class Cat
{
    use Animal;
    use ExtendedAnimal;

    private int $clawsNumber;

    public function __construct(int $age, string $color, string $sex, int $clawsNumber)
    {
        $this->age = $age;
        $this->color = $color;
        $this->sex = $sex;
        $this->clawsNumber = $clawsNumber;
    }
}