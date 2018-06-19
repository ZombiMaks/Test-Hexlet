<?php

function getSameParity($array)
{
    if (empty($array)){
        return [];
    }

    $obsolut = (abs($array[0])) % 2;

    $filters = array_filter($array, function ($filter) use ($obsolut) {
        return abs($filter % 2) == $obsolut;
    });
  return $filters;    

}

print_r(getSameParity([2, 0, 1, -3, 10, -2])); // => []
print_r(getSameParity([-1, 0, 1, -3, 10, -2])); // => [-1, 1, -3]