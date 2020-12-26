<?php

require_once __DIR__ . "/../traits/AnimalActions.php";
require_once __DIR__ . "/../traits/Getters.php";

class Cat
{
    use AnimalActions;
    use Getters;

    private int $age;
    private string $color;
    private string $sex;
    private int $clawsNumber;

    public function __construct(int $age, string $color, string $sex, int $clawsNumber)
    {
        $this->age = $age;
        $this->color = $color;
        $this->sex = $sex;
        $this->clawsNumber = $clawsNumber;
    }

    public function aboutMe(): void
    {
        echo "I am a " . self::class;
        echo PHP_EOL;
        echo "Mi age is: " . $this->getAge();
        echo PHP_EOL;
        echo "Mi color is: " . $this->getColor();
        echo PHP_EOL;
        echo "Mi sex is: " . $this->getSex();
        echo PHP_EOL;
        echo "Mi whiskers length is: " . $this->clawsNumber;
        echo PHP_EOL;
        echo $this->go() . self::class;
        echo PHP_EOL;
        echo $this->run() . self::class;
        echo PHP_EOL;
        echo $this->makeSound() . self::class;
    }
}