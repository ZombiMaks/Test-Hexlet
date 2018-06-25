<?php
/*
Реализуйте класс Point с публичными свойствами $x и $y.
Реализуйте функцию getMidpoint, которая принимает на вход две точки (объекты) и возвращает точку (объект) лежащую между ними (поиск середины отрезка).
*/
class Point
{
  public $x;
  public $y;
}

function getMidpoint($point1, $point2) 
{
  $x = ($point1->x + $point2->x) / 2;
  $y = ($point1->y + $point2->y) / 2;
  
  $pointCenter = new Point();
  $pointCenter->x = $x;
  $pointCenter->y = $y;
  
  return $pointCenter;
}


$point1 = new Point();
$point1->x = 1;
$point1->y = 10;
$point2 = new Point();
$point2->x = 10;
$point2->y = 1;

$midpoint = getMidpoint($point1, $point2);
print_r($midpoint->x); // => 5.5
print_r($midpoint->y); // => 5.5