<?php
require_once __DIR__ . "/Animal.php";

class Elephant
{
    private Animal $elephant;
    private int $trunkLength;

    /**
     * Elephant constructor.
     * @param int $age
     * @param string $color
     * @param string $sex
     * @param int $trunkLength
     */
    public function __construct(int $age, string $color, string $sex, int $trunkLength)
    {
        $this->elephant = new Animal($age, $color, $sex);
        $this->trunkLength = $trunkLength;
    }

    public function aboutMe(): void
    {
        echo "I am a " . get_class();
        echo PHP_EOL;
        echo "Mi age is: " . $this->elephant->getAge();
        echo PHP_EOL;
        echo "Mi color is: " . $this->elephant->getColor();
        echo PHP_EOL;
        echo "Mi sex is: " . $this->elephant->getSex();
        echo PHP_EOL;
        echo "Mi trunk's length is: " . $this->trunkLength;
        echo PHP_EOL;
        echo $this->elephant->go() . get_class();
        echo PHP_EOL;
        echo $this->elephant->run() . get_class();
        echo PHP_EOL;
        echo $this->elephant->makeSound() . get_class();
        echo PHP_EOL;
        echo $this->makeSoundWithTrunk();
    }
    private function makeSoundWithTrunk()
    {
        return "I can make sounds with my trunk";
    }
}