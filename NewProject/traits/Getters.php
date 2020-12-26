<?php


trait Getters
{
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

}