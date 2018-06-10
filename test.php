<?php

function getMensCountByYear($users) 
{
    // фильтруем массив и отбираем мужчин(male)
    $users = array_filter($users, function($user) {
        return $user['gender'] == 'male';
    });
    // date(Y, strtotime()) - извлекаем год рождения (1973, 1963 ....)
    // array_key_exists - проверяем присутствие элемента в массиве
    // считаем количество мужчин по годам
    $bigUserNum = array_reduce($users, function ($acc, $user) {
        if (array_key_exists((date("Y", strtotime($user['birthday']))), $acc)) {
            $acc[(date("Y", strtotime($user['birthday'])))] += 1;
        }else {
            $acc[(date("Y", strtotime($user['birthday'])))] = 1; 
        }
        return $acc;
    }, []);
    return $bigUserNum;
}

 $users = [
    ['name' => 'Bronn', 'gender' => 'male', 'birthday' => '1973-03-23'],
    ['name' => 'Reigar', 'gender' => 'male', 'birthday' => '1973-11-03'],
    ['name' => 'Eiegon',  'gender' => 'male', 'birthday' => '1963-11-03'],
    ['name' => 'Sansa', 'gender' => 'female', 'birthday' => '2012-11-03'],
    ['name' => 'Jon', 'gender' => 'male', 'birthday' => '1980-11-03'],
    ['name' => 'Robb','gender' => 'male', 'birthday' => '1980-05-14'],
    ['name' => 'Tisha', 'gender' => 'female', 'birthday' => '2012-11-03'],
    ['name' => 'Rick', 'gender' => 'male', 'birthday' => '2012-11-03'],
    ['name' => 'Joffrey', 'gender' => 'male', 'birthday' => '1999-11-03'],
    ['name' => 'Edd', 'gender' => 'male', 'birthday' => '1973-11-03']
];

print_r(getMensCountByYear($users));

# => Array (
#     1973 => 3,
#     1963 => 1,
#     1980 => 2,
#     2012 => 1,
#     1999 => 1
# );