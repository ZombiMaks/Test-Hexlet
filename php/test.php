<?php
/*
Реализуйте функцию toStd, которая принимает на вход ассоциативнвый массив и ввозвращает объект типа stdClass такой же структуры. Выполните задачу проставляя ключи и значения вручную без использования преобразования типа.
*/

function toStd($data)
{
    //кодирует в json
    $object = json_encode($data);
    //из json в обьект php
    return json_decode($object);
}
$data = [
    'key' => 'value',
    'key2' => 'value2',
];

$config = toStd($data);
var_dump($config->key); // value
var_dump($config->key2); // value2
