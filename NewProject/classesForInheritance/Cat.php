<?php

class Cat extends Animal
{
    private int $clawsNumber;

    public function __construct(int $age, string $color, string $sex, int $clawsNumber)
    {
        parent::__construct($age, $color, $sex);
        $this->clawsNumber = $clawsNumber;
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