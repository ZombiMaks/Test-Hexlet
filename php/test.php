<?php

$arr = [
    ['*','*','*','*'],
    ['*',' ',' ','*'],
    ['*',' ',' ','*'],
    ['*','*','*','*']
];

function enlargeArrayImage($array)
{
    $newArray = [];
    $i = 0;
    foreach ($array as $value){
        foreach ($value as $item){
            $newArray[$i][] = $item;
            $newArray[$i][] = $item;
        }
        if ($i <= count($array) * 2){
        $i++;
        $newArray[$i] = $newArray[$i - 1];
        $i++;
        } 
    }
    
    return $newArray;
}

print_r(enlargeArrayImage($arr));