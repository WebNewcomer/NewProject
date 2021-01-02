<?php
/*По ссылке все круто расписано. Но я хочу написать, что я хочу увидеть в задаче.

Это два класса платежных систем(Пусть будет Privat, Ukrsib)

Они должны наследовать абстрактный класс PaymentProvider
в котором и будет реализован метод pay
метод pay должен включать в себя 2 функции saveToDB(), changeUserStatus()

В этом классе так же должно быть 2 метода(подумайте какой модификатор доступа должен быть у них).
Один из методов будет абстрактный(Какой?)

Все 2 метода выводят просто var_dump, ничего конкретно не делают.

Должен быть класс Order со свойством $paid будет 0 или 1.
Статусы вынести в константы.

Должен быть класс Client и функция payForOrder которая принимает обьект класса User и обьект типа PaymentProvider.
В ней происходит метод pay, создается новый обьект класса Order и ставится статус paid = true;
Так же должен быть файл index.php который создает нового пользователя, создает конкретный класс платежной системы и вызывает $client->payForOrder();*/


abstract class PaymentProvider
{
    public function pay()
    {
        $this->saveToDB();
        $this->changeUserStatus();
    }

    protected abstract function saveToDB();


    private function changeUserStatus()
    {
        var_dump("saveToDB");
    }
}

class Privat extends PaymentProvider
{
    protected function saveToDB()
    {
        var_dump("save to DB for Privat");
    }
}


class UkrSib extends PaymentProvider
{
    protected function saveToDB()
    {
        var_dump("save to DB for UkrSib");
    }

}


class Order
{
    const PAID = true;
    const NOT_PAID = false;
    private bool $paid;

    public function setPaid(bool $paidStatus)
    {
        $this->paid = $paidStatus;
    }
}

class User
{

}

class Client
{
    public function payForOrder(User $user, PaymentProvider $provider)
    {
        $provider->pay();
        $order = new Order();
        $order->setPaid(Order::PAID);
    }
}

$user = new User;
$provider = new Privat();
$client = new Client();
$client->payForOrder($user, $provider);