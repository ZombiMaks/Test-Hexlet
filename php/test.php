<?php
/*
Реализуйте функцию getQuadrant, которая вычисляет квадрант, в котором находится точка. Ниже приведена схема, показывающая номера квадрантов на плоскости.

        +
      2 | 1
        |
+----------------+
        |
      3 | 4
        +
*/

function getQuadrant($point)
{
    if ($point['x'] > 0 && $point['y'] < 0){
        return 4;
    }elseif($point['x'] > 0 && $point['y'] > 0){
        return 1;
    }elseif($point['x'] < 0 && $point['y'] < 0){
        return 3;
    }elseif($point['x'] < 0 && $point['y'] > 0){
        return 2;
    }else{
        return null;
    }
}

$point1 = ['x' => 3, 'y' => 4];
print_r(getQuadrant($point1)); // => 1
