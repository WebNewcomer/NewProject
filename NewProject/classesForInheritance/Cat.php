<?php

namespace NewProject\NewProject\classesForInheritance;

class Cat extends Animal
{
    private int $clawsNumber;

    /**
     * Cat constructor.
     * @param int $age
     * @param string $color
     * @param string $sex
     * @param int $clawsNumber
     */
    public function __construct(int $age, string $color, string $sex, int $clawsNumber)
    {
        parent::__construct($age, $color, $sex);
        $this->clawsNumber = $clawsNumber;
    }

    protected function makeSoundWithTrunk()
    {
        // TODO: EMPTY makeSoundWithTrunk() method.
    }
}