<?php
/*
Реализуйте класс App\Segment с двумя публичными свойствами beginPoint и endPoint. Определите в классе конструктор.
Реализуйте функцию reverse, которая принимает на вход сегмент и возвращает новый, с точками добавленными в обратном порядке (begin меняется местами со end). Точки должны быть клонированы.
*/
class Point
{
    public $x;
    public $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
}

class Segment
{
        public $beginPoint;
        public $endPoint;
    
    public function __construct($beginPoint, $endPoint)
    {
       $this->beginPoint = $beginPoint;
       $this->endPoint = $endPoint;
    }
}
function reverse($segment)
{
    $cloned = clone $segment;
    $cloned->beginPoint = clone $segment->endPoint;
    $cloned->endPoint = clone $segment->beginPoint;
    return $cloned;
}

$segment = new Segment(new Point(1, 10), new Point(11, -3));
//print_r($segment);
$reversedSegment = reverse($segment);

print_r($reversedSegment->beginPoint); // => (11, -3)
print_r($reversedSegment->endPoint); // => (1, 10)