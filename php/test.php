<?php

function getSameParity($array)
{
    if (empty($array)){
        return [];
    }

    $filter = [];
    foreach ($array as $value){
        // abs - модуль числа
        if (abs($value % 2) == (abs($array[0])) % 2) {
            $filter[] = $value; 
        }
    }
  return $filter;    

}

print_r(getSameParity([2, 0, 1, -3, 10, -2])); // => []
print_r(getSameParity([-1, 0, 1, -3, 10, -2])); // => [-1, 1, -3]