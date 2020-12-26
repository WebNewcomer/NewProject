<?php


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

    private function go() {}

    private function run() {}

    abstract protected function makeSound();

    abstract protected function makeSoundWithTrunk();
}