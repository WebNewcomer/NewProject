<?php
require_once __DIR__ . "/Animal.php";

class Dog
{
    private Animal $dog;
    private int $barkDistance;

    /**
     * Elephant constructor.
     * @param int $age
     * @param string $color
     * @param string $sex
     * @param int $barkDistance
     */
    public function __construct(int $age, string $color, string $sex, int $barkDistance)
    {
        $this->dog = new Animal($age, $color, $sex);
        $this->barkDistance = $barkDistance;
    }

    public function aboutMe(): void
    {
        echo "I am a " . get_class();
        echo PHP_EOL;
        echo "Mi age is: " . $this->dog->getAge();
        echo PHP_EOL;
        echo "Mi color is: " . $this->dog->getColor();
        echo PHP_EOL;
        echo "Mi sex is: " . $this->dog->getSex();
        echo PHP_EOL;
        echo "Mi bark distance is: " . $this->barkDistance;
        echo PHP_EOL;
        echo $this->dog->go() . get_class();
        echo PHP_EOL;
        echo $this->dog->run() . get_class();
        echo PHP_EOL;
        echo $this->dog->makeSound() . get_class();
    }
}