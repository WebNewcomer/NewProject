<?php

class Dog extends Animal
{
    private int $smellDistance;

    public function __construct(int $age, string $color, string $sex, int $smellDistance)
    {
        parent::__construct($age, $color, $sex);
        $this->smellDistance = $smellDistance;
    }

    protected function makeSound()
    {
        // TODO: Implement run() method.
    }

    protected function makeSoundWithTrunk()
    {
        // TODO: EMPTY makeSoundWithTrunk() method.
    }
}