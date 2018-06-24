<?php
/*
Реализуйте абстракцию (набор функций) для работы с прямоугольниками, стороны которого всегда параллельны осям. Прямоугольник может располагаться в любом месте координатной плоскости.

При такой постановке, достаточно знать только три параметра для однозначного задания прямоугольника на плоскости: координаты левой-верхней точки, ширину и высоту. Зная их, мы всегда можем построить прямоугольник одним единственным способом.

      |
    4 |    точка   ширина
      |       *-------------
    3 |       |            |
      |       |            | высота
    2 |       |            |
      |       --------------
    1 |
      |
------|---------------------------
    0 |  1   2   3   4   5   6   7
      |
      |
      |
Основной интерфейс:

makeRectangle (конструктор) - создает прямоугольник. Принимает параметры: левую-верхнюю точку, ширину и высоту.
Селекторы getStartPoint, getWidth и getHeight

isContainsTheOrigin - проверяет, принадлежит ли центр координат прямоугольнику (не лежит на границе прямоугольника, а находится внутри). Чтобы в этом убедиться, достаточно проверить, что все точки прямоугольника лежат в разных квадрантах (их можно высчитать в момент проверки).
*/

// Создание прямоугольника:
// p - левая верхняя точка
// 4 - ширина
// 5 - высота
//
// p    4
// -----------
// |         |
// |         | 5
// |         |
// -----------

// получаем точки и выводим массив(коардинаты точки)
function makeDecartPoint($x, $y)
{
    return [
        'x' => $x,
        'y' => $y
    ];
}
// коардинат по Х
function getX($point)
{
    return $point['x'];
}
// коардинат по У
function getY($point)
{
    return $point['y'];
}
//проверяем в коких квадрантах лежат точки(вершины)
function getQuadrant($point)
{
    $x = $point['x'];
    $y = $point['y'];

    if ($x > 0 && $y > 0) {
        return 1;
    } elseif ($x < 0 && $y > 0) {
        return 2;
    } elseif ($x < 0 && $y < 0) {
        return 3;
    } elseif ($x > 0 && $y < 0) {
        return 4;
    }

    return null;
};

function makeRectangle($p, $width, $height)
{
    $leftTopPoint = getStartPoint($p);
    $getWidth = getWidth($p, $width);
    $getHeigth = getHeight($p, $height);
    return [ $p, $getWidth, $getHeigth];
} 

function getStartPoint($p) 
{
    return $p;
}

function getHeight($p, $height){

    return [
        'x' => $p['x'], 
        'y' => $p['y'] - $height
    ];
}

function getWidth($p, $width)
{
    return [
        'x' => $p['x'] + $width, 
        'y' => $p['y']
    ];
}

function isContainsTheOrigin($rectangle)
{
    $p1 = getQuadrant($rectangle[0]);
    $p2= getQuadrant($rectangle[1]);
    $p3 = getQuadrant($rectangle[2]);
    if ($p1 === $p2 || $p1 === $p3 || $p2 === $p3){
        return false;
    }else{
        return true;
    }
}

$p = makeDecartPoint(0, 1);
$rectangle = makeRectangle($p, 4, 5);
print_r(isContainsTheOrigin($rectangle)); // false

$rectangle2 = makeRectangle(makeDecartPoint(-4, 3), 5, 4);
print_r(isContainsTheOrigin($rectangle2)); // true