<?php

function decode($signal) 
{
    // str_split умеет работать только с ASCII символами, поэтому для разделения строки на символы используйте конструкцию 
   $str = preg_split("//u", $signal, -1, PREG_SPLIT_NO_EMPTY);

   // создаем пустую переменную в каторую будем записывать разшифрованный код
   $result = '';
   if (count($str) < 2){
      return $result; 
   }
   $i = 0;
   while ($i < count($str)) {
        if ($str[$i] == '|') {
            $result .= 1;
            $i++;
        }else{
            $result .= 0;
        }
        $i++;
   }
   return $result;
}

$signal = '_|¯|____|¯|__|¯¯¯';
print_r(decode($signal)); // => '011000110100'

//$signal_2 = '|¯|___|¯¯¯¯¯|___|¯|_|¯';
//decode($signal_2); // => '110010000100111'

//$signal_3 = '¯|___|¯¯¯¯¯|___|¯|_|¯';
//decode($signal_3); // => '010010000100111'

//$this->assertEquals('', 
//decode('');
//$this->assertEquals('', 
//decode('|');
//$this->assertEquals('010110010', 
//decode('¯|__|¯|___|¯¯');
//$this->assertEquals('010011000110', 
//decode('_|¯¯¯|_|¯¯¯¯|¯¯');
//$this->assertEquals('010010000100111', 
//decode('¯|___|¯¯¯¯¯|___|¯|_|¯');
//$this->assertEquals('110010000100111', 
//decode('|¯|___|¯¯¯¯¯|___|¯|_|¯');
