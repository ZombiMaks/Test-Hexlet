<?php
/*
Реализуйте недостающие части класса Timer, который описывает собой таймер обратного отсчета. Необходимо дописать конструктор принимающий на вход три параметра: секунды, минуты (необязательный) и часы (необязательный). Конструктор должен подсчитать общее количество секунд для переданного времени и записать его в свойство secondsCount.

Воспользуйтесь константой SEC_PER_MIN для перевода минут в секунды (через умножение)
Реализуйте дополнительную константу SEC_PER_HOUR и воспользуйтесь ей для перевода часов в секунды
*/

class Timer
{
    const SEC_PER_MIN = 60;
    const SEC_PER_HOUR = 3600;

    public $secondsCount;

    public function __construct($seconds, $minutes=null, $hours=null)
    {
    $this->secondsCount = $seconds + ($minutes * self::SEC_PER_MIN) + ($hours * self::SEC_PER_HOUR); 
    }

    public function getLeftSeconds()
    {
        return $this->secondsCount;
    }

    public function tick()
    {
        $this->secondsCount--;
    }
}

$timer = new Timer(8, 20, 8);
print_r($timer->getLeftSeconds());