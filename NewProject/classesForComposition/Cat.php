<?php

require_once __DIR__ . "/Animal.php";

class Cat
{
    private Animal $cat;
    private int $whiskersLength;

    /**
     * Elephant constructor.
     * @param int $age
     * @param string $color
     * @param string $sex
     * @param int $whiskersLength
     */
    public function __construct(int $age, string $color, string $sex, int $whiskersLength)
    {
        $this->cat = new Animal($age, $color, $sex);
        $this->whiskersLength = $whiskersLength;
    }

    public function aboutMe(): void
    {
        echo "I am a " . get_class();
        echo PHP_EOL;
        echo "Mi age is: " . $this->cat->getAge();
        echo PHP_EOL;
        echo "Mi color is: " . $this->cat->getColor();
        echo PHP_EOL;
        echo "Mi sex is: " . $this->cat->getSex();
        echo PHP_EOL;
        echo "Mi whiskers length is: " . $this->whiskersLength;
        echo PHP_EOL;
        echo $this->cat->go() . get_class();
        echo PHP_EOL;
        echo $this->cat->run() . get_class();
        echo PHP_EOL;
        echo $this->cat->makeSound() . get_class();
    }
}