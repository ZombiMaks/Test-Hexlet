<?php

function without(array $items, $value)
{
    $value = func_get_args(); // Возвращает массив, содержащий аргументы функции
    array_shift($value); // Извлекает первый элемент массива
    $filtered = array_diff($items, $value); // Вычислить расхождение массивов
    return array_values($filtered); // Сбрасываем ключи
}


print_r(without([3, 4, 10, 4, 'true'], 4)); // => [3, 10, 'true']
print_r(without(['3', 2], 0, 5, 11)); // => ['3', 2]
//$this->assertEquals([], 
print_r(without([], null));
//$this->assertEquals([3, 10, 'true'],
print_r(without([3, 4, 10, 4, 'true'], 4));
print_r(without(['wow', 3, 4, 10, 4, 'true'], null, 4));
print_r(without([3, 4, 10, 'true'], 3, 4));
print_r(without(['3', 2], 0, 5));
