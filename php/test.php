<?php
/*
Реализуйте класс DeckOfCards который описывает собой колоду карт и умеет ее мешать.

Конструктор класса принимает на вход массив в котором перечислены номиналы карт в единственном экземпляре, например, [6, 7, 8, 9, 10, 'king']. Затем, с помощью, метода getShuffled можно получить полную колоду (то есть такую колоду, в которой каждая карта встречается 4 раза. Для простоты не учитываем масть) в виде массива отсортированную случайным образом
*/

class DeckOfCards
{
    private $carts = array();
    private $cart;

    public function __construct($carts){
        $colection = [];
       foreach($carts as $value){
           $colection[] = $value;
           $colection[] = $value;
           $colection[] = $value;
           $colection[] = $value;
       }
        $this->cart =  $colection;
        $this->carts = $carts;
    }

    public function getShuffled()
    {
       $colection = $this->cart;
       shuffle($colection);
       return $colection;  
    }
}


$deck = new DeckOfCards([2, 3, 5]);
print_r($deck->getShuffled()); // [2, 3, 3, 3, 2, 3, 2, 2]
print_r($deck->getShuffled()); // [3, 3, 2, 2, 2, 3, 3, 2]