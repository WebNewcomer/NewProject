<?php

/*Task1
Prints out the string of the given array's elements */
function greeting()
{
    $name = "Evgen";
    $a = ["Привет", "Мир!", "Меня", "зовут", $name];
    return $a[0] . " " . $a[1] . " " . $a[2] . " " . $a[3] . " " . $a[4];
}

echo greeting();

/*Task2
Prints out salaries amount for dep1 and dep2*/
function salaryCalc()
{
    $arr = [
        "dep1" => ["Kolya" => 1000, "Oleg" => 700, "Olya" => 1100],
        "dep2" => ["Nik" => 900, "Jhon" => 800, "Boss" => 1600],
    ];

    $dep1Salary = $arr["dep1"]["Kolya"] + $arr["dep1"]["Oleg"] + $arr["dep1"]["Olya"];
    $dep2Salary = $arr["dep2"]["Nik"] + $arr["dep2"]["Jhon"] + $arr["dep2"]["Boss"];
    echo "Dep1 salary: " . $dep1Salary;
    echo PHP_EOL;
    echo "Dep2 salary: " . $dep2Salary;
}

salaryCalc();

/*Task3
Prints out specified array's slice*/
$arr = [1, 2, 3, 4, 5, 6];
var_dump(array_slice($arr, 3));

/*Task4
Prints out initial array content
The first and last elements pulled out and the final array's appearance*/
function lastAndFirst()
{
    $arr = [1, 2, 3, 4, 5, 6];
    echo "The initial array has the following appearance: " . PHP_EOL;
    var_dump($arr);
    echo "The first given array's value is: " . array_shift($arr);
    echo PHP_EOL;
    echo "The first given array's value is: " . array_pop($arr);
    echo "Now the same array has the following appearance: " . PHP_EOL;
    var_dump($arr);
}

lastAndFirst();