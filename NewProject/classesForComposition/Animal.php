<?php

class Animal
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

    public function go(): string
    {
        return "I can go like ";
    }

    public function run(): string
    {
        return "I can run like ";
    }

    public function makeSound(): string
    {
        return "I can make sounds like ";
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @return string
     */
    public function getSex(): string
    {
        return $this->sex;
    }

}