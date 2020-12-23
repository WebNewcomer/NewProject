<?php

class Cat
{
    /**
     * Cat's parameters
     */
    private int $age;
    private string $color;
    private string $brood;
    private string $sex;
    private int $earLength;

    /**
     * Cat constructor.
     * @param int $age
     * @param string $color
     * @param string $brood
     * @param string $sex
     * @param int $earLength
     */
    public function __construct(int $age, string $color, string $brood, string $sex, int $earLength)
    {
        $this->age = $this->ageRecalculate($age);
        $this->color = $color;
        $this->brood = $brood;
        $this->sex = $sex;
        $this->earLength = $earLength;
    }

    /**
     * Checks if a cat is a boy
     *
     * @return bool
     */
    private function isBoy(): bool
    {
        return $this->sex == "boy";
    }

    /**
     * Checks if a cat is a girl
     *
     * @return bool
     */
    private function isGirl(): bool
    {
        return $this->sex == "girl";
    }

    /**
     * Recalculates humans' age to cats
     *
     * @param int $age
     * @return int
     */
    private function ageRecalculate(int $age): int
    {
        return $this->age = $age / 7;
    }

    /**
     * Checks if cat's age is proper using specified edge values
     *
     * @return bool
     */
    private function isProperAge(): bool
    {
        return $this->age < 7 && $this->age > 2;
    }

    /**
     * Checks if a cat's color is proper comparing to specified value
     *
     * @return bool
     */
    private function isProperColor(): bool
    {
        return $this->color == "black";
    }

    /**
     * Checks if cat's ears length is proper using specified edge values
     *
     * @return bool
     */
    private function isProperEarLength(): bool
    {
        return $this->earLength < 7 && $this->age > 3;
    }

    /**
     * Checks if cat's brood is proper using specified value
     * @return bool
     */
    private function isProperBrood(): bool
    {
        return $this->brood == "peterbold";
    }

    /**
     * Checks if a cat object is perfect using defined checks
     * Parameters for compare: color, age, color, ear length, brood.
     *
     * @return bool
     */
    public function iSPerfectCat(): bool
    {
        return $this->isProperAge() && $this->isProperColor()
            && $this->isProperEarLength() && $this->isProperBrood();
    }
}