<?php
/*
Реализуйте класс Circle для описания кругов. У круга есть только одно свойство - его радиус. Реализуйте методы getArea и getCircumference, которые возвращают площадь и периметр круга соответственно.

Площадь круга: πr2
Длина окружности: 2*πR
*/

class Circle
{
    private $radius;

    function __construct($radius)
    {
        $this->radius = $radius;
    }

    function getArea()
    {
        return pi() * ($this->radius ** 2);
    }

    function getCircumference()
    {
        return 2 * pi() * $this->radius;
    }
}

$circle = new Circle(3);

print_r($circle->getArea());