<?php
/*
Реализуйте абстракцию для работы с рациональными числами включающую в себя следующие функции:

Конструктор makeRational - принимает на вход числитель и знаменатель, возвращает дробь.
Селектор getNumer - возвращает числитель
Селектор getDenom - возвращает знаменатель
Сложение add - складывает переданные дроби
Вычитание sub - находит разность между двумя дробями
Не забудьте реализовать нормализацию дробей удобным для вас способом
*/

// Функция gcd находит наибольший общий делитель двух чисел
function gcd($a, $b)
{
    return ($a % $b) ? gcd($b, $a % $b) : $b;
}

function  makeRational($numer, $denom)
{
    $comonDevisor = gcd($numer, $denom);
    $a = $numer / $comonDevisor;
    $b = $denom / $comonDevisor;
    return "{$a}/{$b}"; 
}

function getNumer($rat1)
{
    return explode('/', $rat1)[0];;
}

function getDenom($rat1)
{
    return explode('/', $rat1)[1];;
}

function add($rat1, $rat2) 
{
    $sumNumer = getNumer($rat1) * getDenom($rat2) + getNumer($rat2) * getDenom($rat1);
    return makeRational($sumNumer, getdenom($rat1) * getDenom($rat2));
}

function sub($rat1, $rat2)
{
    $sumNumer = getNumer($rat1) * getDenom($rat2) - getNumer($rat2) * getDenom($rat1);
    return makeRational($sumNumer, getdenom($rat1) * getDenom($rat2));
}

$rat1 = makeRational(3, 9);
//print_r(getNumer($rat1)); // => 1
//print_r(getDenom($rat1)); // => 3

$rat2 = makeRational(10, 3);
print_r(add($rat1, $rat2)); // => 11/3
print_r(sub($rat1, $rat2)); // => -3/1