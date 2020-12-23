<?php

require_once __DIR__ . "/NewProject/classes/Cat.php";

$rightCat = new Cat(30, "black", "peterbold", "boy", 5);
var_dump($rightCat->iSPerfectCat());

$notRightCat = new Cat(30, "white", "peterbold", "boy", 5);
var_dump($notRightCat->iSPerfectCat());