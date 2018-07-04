<?php
/*
Реализуйте недостающие части класса Timer, который описывает собой таймер обратного отсчета. Необходимо дописать конструктор принимающий на вход три параметра: секунды, минуты (необязательный) и часы (необязательный). Конструктор должен подсчитать общее количество секунд для переданного времени и записать его в свойство secondsCount.

Воспользуйтесь константой SEC_PER_MIN для перевода минут в секунды (через умножение)
Реализуйте дополнительную константу SEC_PER_HOUR и воспользуйтесь ей для перевода часов в секунды
*/

class Time
{
    private $h;
    private $m;

    public static function fromString($time)
    {
        return new self(intval(date("h" , strtotime($time))),  intval(date("i" , strtotime($time))));
    }

    public function __construct($h, $m)
    {
        $this->h = $h;
        $this->m = $m;
    }

    public function toString()
    {
        return "{$this->h}:{$this->m}";
    }
}

$time = Time::fromString('3:8');
print_r($time);