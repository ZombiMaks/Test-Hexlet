<?php
/*
Реализуйте генератор рандомных чисел представленный классом Random. Интерфейс объекта включает в себя три функции:

Конструктор, принимает на вход seed, начальное число генератора псевдослучайных чисел.
getNext - метод возврающающий новое случаное число
reset - метод сбрасывающий генератор на начальное значение

Простейший способ реализовать случайные числа это линейный конгруэнтный метод seed = (a * seed + c) % m; 
$m = 2147483647;
$a = 16807;
$c = 0;
*/

class Random
{
    const M = 2147483647;
    const A = 16807;
    const C = 0;
    private $seed;
    private $newSeed;

    function __construct($seed)
    {
        $this->seed = $seed;
        $this->newSeed = $seed;
    }

    function getNext()
    {
    
        $this->seed = (self::A * $this->seed + self::C) % self::M;
        return $this->seed . " ";
      
    }

    function reset()
    {
        $this->seed = $this->newSeed;
    }
}

$seq = new Random(100);
echo $result1 = $seq->getNext();
echo $result2 = $seq->getNext();

echo $result1 != $result2; // => true

echo $seq->reset();

echo $result21 = $seq->getNext();
echo $result22 = $seq->getNext();

echo $result1 == $result21; // => true
echo $result2 == $result22; // => true