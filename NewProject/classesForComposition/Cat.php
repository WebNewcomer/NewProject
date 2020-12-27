<?php

namespace NewProject\NewProject\classesForComposition;

require_once __DIR__ . "/Animal.php";

class Cat
{
    private Animal $animal;
    private int $whiskersLength;

    /**
     * Elephant constructor.
     * @param int $age
     * @param string $color
     * @param string $sex
     * @param int $whiskersLength
     */
    public function __construct(int $age, string $color, string $sex, int $whiskersLength)
    {
        $this->animal = new Animal($age, $color, $sex);
        $this->whiskersLength = $whiskersLength;
    }
}