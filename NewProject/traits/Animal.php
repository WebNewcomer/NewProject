<?php

namespace NewProject\NewProject\traits;

trait Animal
{
    private int $age;
    private string $color;
    private string $sex;

    public function getAge(): int
    {
        return $this->age;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function getSex(): string
    {
        return $this->sex;
    }

    public function getName($name): string
    {
        return str_replace($name . '\\', '', get_class());
    }

    public function go(): void
    {
        echo("I can go");
    }

    public function run(): void
    {
        echo("I can run");
    }

    public function makeSound(): void
    {
        echo("I can make sound");
    }
}