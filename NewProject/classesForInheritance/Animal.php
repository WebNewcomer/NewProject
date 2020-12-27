<?php

namespace NewProject\NewProject\classesForInheritance;

abstract class Animal
{
    /**
     * Animal's parameters
     */
    private int $age;
    private string $color;
    private string $sex;

    /**
     * Cat constructor.
     * @param int $age
     * @param string $color
     * @param string $sex
     */
    public function __construct(int $age, string $color, string $sex)
    {
        $this->age = $age;
        $this->color = $color;
        $this->sex = $sex;
    }

    private function go()
    {
        echo("I can go");
    }

    private function run()
    {
        echo("I can run");
    }

    private function makeSound()
    {
        echo("I can make sound");
    }

    private function makeSoundWithTrunk()
    {
        echo("I can make sound with trunk");
    }
}