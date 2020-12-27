<?php

namespace NewProject\NewProject\classesWithTraits;

use NewProject\NewProject\traits\Animal;
use NewProject\NewProject\traits\ExtendedAnimal;

require_once __DIR__ . "/../traits/Animal.php";
require_once __DIR__ . "/../traits/ExtendedAnimal.php";

class Elephant
{

    use Animal;
    use ExtendedAnimal;

    private int $trunkLength;

    public function __construct(int $age, string $color, string $sex, int $trunkLength)
    {
        $this->age = $age;
        $this->color = $color;
        $this->sex = $sex;
        $this->trunkLength = $trunkLength;
    }
}