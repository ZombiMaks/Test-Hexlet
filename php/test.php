<?php
/*
Реализуйте функцию normalize которая принимает на вход список городов, производит внутри некоторые преобразования и возвращает структуру определенного формата.
*/

function normalize($raw)
{
  $country = array_map(function ($coun) 
  {
    return trim(strtolower($coun['country']));
  }, $raw);
  $countrys = array_unique($country);
  $result = [];
  for ($i = 0; $i<count($raw); $i++){
      if (trim(strtolower($raw[$i]['country'])) == $countrys[0]){
        $result[$countrys[0]][] = trim(strtolower($raw[$i]['name']));
        $result[$countrys[0]] = array_unique($result[$countrys[0]]);
        sort($result[$countrys[0]]);
      }else{
        $result[$countrys[1]][] = trim(strtolower($raw[$i]['name']));
        $result[$countrys[1]] = array_unique($result[$countrys[1]]);
        sort($result[$countrys[1]]);
      }
      ksort($result);
  }
  return $result;
}

$raw = [
  [
      'name' => 'istambul',
      'country' => 'turkey'
  ],
  [
      'name' => 'Moscow ',
      'country' => ' Russia'
  ],
  [
      'name' => 'iStambul',
      'country' => 'tUrkey'
  ],
  [
      'name' => 'antalia',
      'country' => 'turkeY '
  ],
  [
      'name' => 'samarA',
      'country' => '  ruSsiA'
  ],
];

$actual = normalize($raw);
print_r($actual);
