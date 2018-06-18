<?php

function getDifference($array1, $array2)
{
   $filterArray = array_filter($array1, function ($array) use ($array2) {
        return !in_array($array, $array2);
    });
    return array_values($filterArray);
}

getDifference([2, 1], [2, 3]);
// → [1]