<?php
/*
Реализуйте класс Point с публичными свойствами $x и $y.
Реализуйте функцию getMidpoint, которая принимает на вход две точки (объекты) и возвращает точку (объект) лежащую между ними (поиск середины отрезка).
*/

$point1 = new Point();
$point->x = 1;
$point->y = 10;
$point2 = new Point();
$point->x = 10;
$point->y = 1;

$midpoint = getMidpoint($point1, $point2);
$midpoint->x; // => 5.5
$midpoint->y; // => 5.5