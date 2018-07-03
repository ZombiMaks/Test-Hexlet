<?php
/*
Реализуйте функцию __toString, которая преобразует сегмент к строке в соответствии с примером ниже [(1, 10)]
*/

class Point
{
    private $x;
    private $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function __toString()
    {
        return "({$this->x}, {$this->y})";
    }
}

class Segment
{
    private $beginPoint;
    private $endPoint;

    public function __construct($beginPoint, $endPoint)
    {
        $this->beginPoint = $beginPoint;
        $this->endPoint = $endPoint;
    }

    public function __toString()
    {
        return "[{$this->beginPoint}, {$this->endPoint}]";
    }
}

$point1 = new Point(1, 10); 
$point2 = new Point(11, -3);
$segment1 = new Segment($point1, $point2);
echo $segment1; // => [(1, 10), (11, -3)]

//$segment2 = new Segment($point2, $point1);
//print_r($segment2); // => [(11, -3), (1, 10)]
