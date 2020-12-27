<?php

namespace NewProject\NewProject\classesForComposition;

require_once __DIR__ . "/Animal.php";

class Dog
{
    private Animal $animal;
    private int $barkDistance;

    /**
     * Elephant constructor.
     * @param int $age
     * @param string $color
     * @param string $sex
     * @param int $barkDistance
     */
    public function __construct(int $age, string $color, string $sex, int $barkDistance)
    {
        $this->animal = new Animal($age, $color, $sex);
        $this->barkDistance = $barkDistance;
    }
}