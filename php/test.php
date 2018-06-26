<?php
/*
Реализуйте функцию dup, которая клонирует переданную точку. Под клонированием подразумевается процесс создания нового объекта, с такими же данными как и у старого.
*/

class Point
{
    public $x;
    public $y;
}

function dup($point1)
{
    $pointer = clone $point1;
   return $pointer;        
}


$point1 = new Point();
$point1->x = 3;
$point1->y = 5;
$point2 = dup($point1);
print_r($point2);
print_r($point1);

print_r($point1 == $point2); // true
print_r($point1 === $point2); // false