<?php
/*
Реализуйте функцию getQuestions, которая принимает на вход текст (полученный из редактора) и возвращает список вопросов извлеченных из этого текста разделенных переводом строки.

Входящий текст разбит на строки и может содержать любые пробельные символы. Некоторые из этих строк являются вопросами. Они определяются по последнему символу, который должен равняться знаку ?.
*/

require 'vendor/autoload.php';

use function Stringy\create as s;

function getQuestions($text)
{
   $arrayText = s($text)->lines();
   $str = '';
   foreach ($arrayText as $value){
       if(s($value)->contains('?')){
           if (s($str)->contains('\n')){
            $str .= $value;
           }else{
            $str .= $value . "\n";
           }
       }
   }
   return $str;
}

$text = <<<HEREDOC
lala\r\nr
ehu?
\n \t
i see you
/r \n
one two?\r\n\n
HEREDOC;

print_r(getQuestions($text));
// ehu?
// one two?