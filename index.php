<?php
/*Написать цикл который посчитает сумму в dept1 и в dept2. Вывести сумму dept1 + dept2.
Написать цикл который выводит цифры от 0 до 100 но обрывается на 50
Написать функцию которая принимает массив $arr = [1,5,6,9,12] в цикле считает сумму и выдает результат числом. Вывести число на экран.
Написать функцию которая принимает массив и считает сумму его элементов. Написать другую функцию которая использует первую, которой на вход подается массив с подмассивами. (Пример c dept1, dept2)*/

/* Task1 */
$array = [
    "dep1" => ["Kolya" => 1000, "Oleg" => 700, "Olya" => 1100],
    "dep2" => ["Nik" => 900, "Jhon" => 800, "Boss" => 1600],
];

function sum(array $arr): ?int
{
    $sum = 0;
    foreach ($arr as $item) {
        $sum += $item;
    }
    return $sum;
}

echo "Sum of dep1 and dep2 is: " . (sum($array["dep1"]) + sum($array["dep2"]));



/* Task2 */
function brokenCycle(int $count): void
{
    for ($i = 0; $i < $count; $i++) {
        echo $i . " ";
        if ($i == 50) {
            break;
        }
    }
}

brokenCycle(100);



/* Task3 */
function arraySum(array $array): int
{
    $sum = 0;
    foreach ($array as $item) {
        $sum += $item;
    }
    return $sum;
}

echo "Array values sum is: " . arraySum($arr = [1,5,6,9,12]);



/* Task4 */
$arr = [
    "dep1" => ["Kolya" => 1000, "Oleg" => 700, "Olya" => 1100],
    "dep2" => ["Nik" => 900, "Jhon" => 800, "Boss" => 1600],
];

function oneArraySum(array $array): int
{
    $sum = 0;
    foreach ($array as $item) {
        $sum += $item;
    }
    return $sum;
}

function arraysSum(array $array): int
{
    return oneArraySum($array["dep1"]) + oneArraySum($array["dep2"]);
}

echo "Sum of dep1 and dep2 is: " . arraysSum($arr);