<?php

namespace NewProject\NewProject\classesForComposition;

use ExtendOfAnimal;

require_once __DIR__ . "/Animal.php";
require_once __DIR__ . "/ExtendOfAnimal.php";

class Elephant
{
    private Animal $animal;
    private ExtendOfAnimal $elephant;
    private int $trunkLength;

    /**
     * Elephant constructor.
     * @param int $age
     * @param string $color
     * @param string $sex
     * @param int $trunkLength
     */
    public function __construct(int $age, string $color, string $sex, int $trunkLength)
    {
        $this->animal = new Animal($age, $color, $sex);
        $this->trunkLength = $trunkLength;
    }
}