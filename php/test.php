<?php
/*
Реализуйте указанные ниже функции:

makeSegment. Принимает на вход две точки и возвращает отрезок.
getMidpointOfSegment. Принимает на вход отрезок и возвращает точку находящуюся на середине отрезка.
Средняя точка вычисляется по формуле x = (x1 + x2) / 2 и y = (y1 + y2) / 2.
*/

function makeSegment($point1, $point2)
{
    return  [   
                'point1' => $point1,
                'point2' => $point2
    ];
}

function makeDecartPoint($x, $y)
{
    return [
        'x' => $x,
        'y' => $y
    ];
}

function getMidpointOfSegment($segment)
{
    //x = (x1 + x2) / 2 
    $x = ($segment['point1']['x'] + $segment['point2']['x']) / 2;
    //y = (y1 + y2) / 2.
    $y = ($segment['point1']['y'] + $segment['point2']['y']) / 2;

   return [
       'x' => $x,
       'y' => $y
    ];
}

$segment = makeSegment(makeDecartPoint(3, 2), makeDecartPoint(0, 0));
print_r(getMidpointOfSegment($segment)); // => (1.5, 1)