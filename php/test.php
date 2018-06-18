<?php

function getFirstMenWithLessFriends($users) {
    // проверяем на пустоту
   if (empty($users)){
       return null;
   }
  
   $minFriends = array_reduce($users, function ($acc, $user){
       // проверяем на пустоту $acc и добавляем $user 
       if (empty($acc)){
           $acc = $user;
       }
       // находим первого пользователя с меньшим количеством друзей
       if (count($user['friends']) < count($acc['friends'])){
          $acc = $user;
       }
       return $acc;
   }, []);

   return $minFriends;
}

$users = [
    ['name' => 'Tirion', 'friends' => [
        ['name' => 'Mira', 'gender' => 'female'],
        ['name' => 'Ramsey', 'gender' => 'male']
    ]],
    ['name' => 'Bronn', 'friends' => []],
    ['name' => 'Sam', 'friends' => [
        ['name' => 'Aria', 'gender' => 'female'],
        ['name' => 'Keit', 'gender' => 'female']
    ]],
    ['name' => 'Keit', 'friends' => []],
    ['name' => 'Rob', 'friends' => [
        ['name' => 'Taywin', 'gender' => 'male']
    ]],
];

print_r(getFirstMenWithLessFriends($users));
// => ['name' => 'Bronn', 'friends' => []];