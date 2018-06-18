<?php


function findIndexOfNearest(array $items, $value)
{
    if (sizeof($items) === 0) {
        return null;
    }

    return array_reduce(array_keys($items), function ($acc, $i) use ($items, $value) {
        return abs($items[$i] - $value) < abs($items[$acc] - $value) ? $i : $acc;
    }, 0);
}


print_r(findIndexOfNearest([], 2)); // => null
print_r(findIndexOfNearest([10], 0)); // => 2
print_r(findIndexOfNearest([10, 15, 17, 19, 25, 30], 20));
print_r(findIndexOfNearest([15, 10, 3, -5], -2));

/*$this->assertNull(findIndexOfNearest([], 2));
$this->assertEquals(0, findIndexOfNearest([10], 0));
$this->assertEquals(1, findIndexOfNearest([10, 15], 20));
$this->assertEquals(3, findIndexOfNearest([15, 10, 3, -5]-2));*/