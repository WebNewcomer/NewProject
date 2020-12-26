<?php

trait AnimalActions
{
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
}