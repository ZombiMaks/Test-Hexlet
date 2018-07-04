<?php
/*
Реализуйте класс User, который создает пользователей. Конструктор класса принимает на вход два параметра: идентификатор и имя.

Реализуйте интерфейс Comparable для класса User. Сравнение пользователей происходит на основе их идентификатора.
*/

interface Comparable
{
    public function compareTo($user);
}
class User implements Comparable
{
    private $id;
    private $name;

    public function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    public function compareTo($user)
    {
        return $this->id == $user->id;
    }

}

$user1 = new User(4, 'tolya');
$user2 = new User(4, 'petya');

echo $user1->compareTo($user2); // false