<?php

namespace NewProject\NewProject\classesForInheritance;

class Elephant extends Animal
{
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
        parent::__construct($age, $color, $sex);
        $this->trunkLength = $trunkLength;
    }
}