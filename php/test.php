<?php

function calculateDistance($point1, $point2) {
    // вычесляем растояние по теореме Пифагора
    // hypot — Рассчитывает длину гипотенузы прямоугольного треугольника
    $hypotenuse = hypot($point1[0] - $point2[0], $point1[1] - $point2[1]);
    return $hypotenuse;
}

$point1 = [0, 0];
$point2 = [3, 4];
print_r(calculateDistance($point1, $point2)); // => 5