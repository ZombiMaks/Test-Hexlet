<?php
/*
Реализуйте класс для работы с рациональными числами, включающую в себя следующие методы:

Конструктор — принимает на вход числитель и знаменатель.
Метод getNumer — возвращает числитель
Метод getDenom — возвращает знаменатель
Сложение add — складывает переданные дроби
Вычитание sub — находит разность между двумя дробями
Нормализацию делать не надо!

Подобные абстракции, как правило, создаются неизменяемыми. Поэтому сделайте так, чтобы методы add и sub возвращали новое рациональное число, а не мутировали объект.
*/
class Rational
{
    public $x;
    public $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function getNumer()
    {
        return $this->x;
    }
    public function getDenom()
    {
        return $this->y;
    }

    public function add($rat2)
    {
        $numer = ($this->getNumer() * $rat2->getDenom()) + ($this->getDenom() * $rat2->getNumer());
        $denom = $this->getDenom() * $rat2->getDenom();
        return new Rational($numer, $denom);
    } 
    
    public function sub($rat2)
    {
        $numer = ($this->getNumer() * $rat2->getDenom()) - ($this->getDenom() * $rat2->getNumer());
        $denom = $this->getDenom() * $rat2->getDenom();
        return new Rational($numer, $denom);
    }  
}

$rat1 = new Rational(3, 9);
$rat1->getNumer(); // => 3
$rat1->getDenom(); // => 9

$rat2 = new Rational(10, 3);

$rat3 = $rat1->add($rat2); // => Абстракция для рационального числа 99/27
print_r($rat3);
$rat3->getNumer();         // => 99
$rat3->getDenom();         // => 27

$rat4 = $rat1->sub($rat2); // => Абстракция для рационального числа -81/27
$rat4->getNumer();         // => -81
$rat4->getDenom();

print_r($rat4);// => 27