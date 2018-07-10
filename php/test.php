<?php
/*
Реализуйте функцию compare, которая сравнивает две строчки набранные в редакторе. Если они равны то возвращает true, иначе - false. Особенность строчек в том они могут содержать символ #, который означает нажатие клавиши Backspace. То есть перед самим сравнением, нужно вычислить реальную строчку отображенную в редакторе.
*/

function compare(string $str1, string $str2)
{
    $stack1 = new \Ds\Stack();
    $stack2 = new \Ds\Stack();

    for ($i = 0; $i < strlen($str1); $i++){
        $curr = $str1[$i];
        if($curr !== '#'){
            $stack1->push($curr);
        }
    }
    for ($i = 0; $i < strlen($str2); $i++){
        $curr = $str2[$i];
        if($curr !== '#'){
            $stack2->push($curr);
        }
    }
     return sizeof($stack1) == sizeof($stack2);
}

var_dump(compare('ab#c', 'ab#c')); // true
var_dump(compare('ab##', 'c#d#')); // true
var_dump(compare('a#c', 'b')); // false
