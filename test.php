<?php

require __DIR__ . '/vendor/autoload.php'; 

use function Funct\Collection\firstN;

// BEGIN (write your solution here)
function takeOldest($users, $n = 1)
{
  $cmp = function ($a, $b) {
  return strtotime($a['birthday']) > strtotime($b['birthday']) ? 1 : -1;
}; 

usort($users, $cmp);

return firstN($users, $n);
}
// END
$users = [
    ['name' => 'Tirion', 'birthday' => '1988-11-19'],
    ['name' => 'Sam', 'birthday' => '1999-11-22'],
    ['name' => 'Rob', 'birthday' => '1975-01-11'],
    ['name' => 'Sansa', 'birthday' => '2001-03-20'],
    ['name' => 'Tisha', 'birthday' => '1992-02-27']
];

var_dump(takeOldest($users));


