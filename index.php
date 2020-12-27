<?php
/*Написать класс Animal(животное) который будет родительским для классов Cat, Dog, Elephant.
Вывести общие свойства для этих трех классов, поместить в родительский. Все свойства максимально закрывать модификаторами доступа.
У родительского класса будут методы
Идти, бежать, издать звук.
Так как у слона издание звуков сложнее, у него будет еще функция издатьЗвукИзХобота.
Так как все классы должны быть похожи мы переносим этот метод наверх, родительскому классу.
Подумать почему этот метод плохой. Написать вариант с использованием композиции(Может быть не один класс).
Написать вариант с помощью трейтов. Можно так же написать вариант без этого, подумав как организовать систему правильно.*/

require_once __DIR__ . "/NewProject/classesForInheritance/Elephant.php";
require_once __DIR__ . "/NewProject/classesForInheritance/Dog.php";
require_once __DIR__ . "/NewProject/classesForInheritance/Cat.php";

$elephant = new Elephant(45, "gray", "boy", 2);
$elephant->aboutMe();
echo "<hr>";

$dog = new Dog(3, "black", "boy", 200);
$dog->aboutMe();
echo "<hr>";

$cat = new Cat(2, "black", "boy", 1);
$cat->aboutMe();
echo "<hr>";


//____________________________________________________________________________________
use NewProject\NewProject\classesWithTraits\Elephant;
use NewProject\NewProject\classesWithTraits\Dog;
use NewProject\NewProject\classesWithTraits\Cat;

require_once __DIR__ . "/NewProject/classesWithTraits/Elephant.php";
require_once __DIR__ . "/NewProject/classesWithTraits/Dog.php";
require_once __DIR__ . "/NewProject/classesWithTraits/Cat.php";

$elephant = new Elephant(45, "gray", "boy", 2);
$elephant->aboutMe();
echo "<hr>";

$dog = new Dog(3, "black", "boy", 200);
$dog->aboutMe();
echo "<hr>";

$cat = new Cat(2, "black", "boy", 1);
$cat->aboutMe();
echo "<hr>";


//_____________________________________________________________________________________
/*require_once __DIR__ . "/NewProject/classesForComposition/Elephant.php";
require_once __DIR__ . "/NewProject/classesForComposition/Dog.php";
require_once __DIR__ . "/NewProject/classesForComposition/Cat.php";

$elephant = new Elephant(45, "gray", "boy", 2);
$elephant->aboutMe();
echo "<hr>";

$dog = new Dog(3, "black", "boy", 200);
$dog->aboutMe();
echo "<hr>";

$cat = new Cat(3, "black", "boy", 1);
$cat->aboutMe();
echo "<hr>";*/
