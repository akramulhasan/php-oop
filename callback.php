<?php
$num = [1, 2, 3, 4, 5, 6];

$square = function ($num) {

    return $num * $num;
};

$squarNum = array_map($square, $num);

print_r($squarNum);



function applyCallback($cb, $value)
{
    return $cb($value);
}

$double = function ($num) {
    return $num * 2;
};

$result = applyCallback($double, 5);

print_r($result);


//Arrow function

function add($a, $b)
{
    return $a + $b;
}


$add = fn ($a, $b) => $a + $b;

echo $add(5, 9);


$anotherNum = [2, 4, 6, 8];

$sq = array_map(fn ($number) => $number * $number, $anotherNum);

print_r($sq);
