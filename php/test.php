<?php
/*
Реализуйте функцию compare, которая сравнивает переданных пользователей на основе идентификатора. Эта функция должна убедиться что переданные объекты - пользователи.
*/
class User
{
    public $id;
    public $name;
}


function compare($user1, $user2)
{
   $checkUser1 = get_class($user1);
   $checkUser2 = get_class($user2);

   return $checkUser1 === $checkUser2 && $user1->id === $user2->id;      
}


$user1 = new User();
$user1->id = 1;
$user1->name = 'Petr';

$user2 = new User();
$user2->id = 1;
$user2->name = 'Ignat';

$user3 = new User();
$user3->id = 2;

print_r(compare($user1, $user2));
print_r(compare($user1, $user3)); // => true
