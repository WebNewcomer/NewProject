<?php

class Elephant extends Animal
{
    private int $trunkLength;

    public function __construct(int $age, string $color, string $sex, int $trunkLength)
    {
        parent::__construct($age, $color, $sex);
        $this->trunkLength = $trunkLength;
    }

    protected function makeSound()
    {
        // TODO: Implement run() method.
    }

    protected function makeSoundWithTrunk()
    {
        // TODO: Implement makeSoundWithTrunk() method.
    }
}