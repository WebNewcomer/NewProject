<?php

namespace NewProject\NewProject\classesForInheritance;

class Dog extends Animal
{
    private int $smellDistance;

    /**
     * Dog constructor.
     * @param int $age
     * @param string $color
     * @param string $sex
     * @param int $smellDistance
     */
    public function __construct(int $age, string $color, string $sex, int $smellDistance)
    {
        parent::__construct($age, $color, $sex);
        $this->smellDistance = $smellDistance;
    }

    protected function makeSoundWithTrunk()
    {
        // TODO: EMPTY makeSoundWithTrunk() method.
    }
}