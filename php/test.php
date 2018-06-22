<?php
/*
Реализуйте интерфейсные фунции точек:
makeDecartPoint. Принимает на вход координаты и возвращает точку. Уже реализован.
getX
getY
Получить x можно по формуле radius * cos(angle)
Получить y можно по формуле radius * sin(angle)
*/

function makeDecartPoint($x, $y)
{
     return [
         'angle' => atan2($y, $x),
         'radius' => sqrt($x ** 2 + $y ** 2)
     ];
}

function getX($point)
{
    return  $point['radius'] * cos($point['angle']);
}

function getY($point)
{
  return  $point['radius'] * sin($point['angle']);
}

$x = 4;
$y = 8;

// $point хранит в себе данные в полярной системе координат
$point = makeDecartPoint($x, $y);

// Здесь происходит преобразование из полярной в декартову
print_r(getX($point)); // 4
print_r(getY($point)); // 8