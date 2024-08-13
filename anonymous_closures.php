<?php

// $square = function ($number) {
//     return $number * $number;
// };

// $result = $square(5);

// echo 'The square of the 5 is ' . $result;

// Closure
//function createCounter()
// {
//     $count = 0;

//     $counter = function () use (&$count) {
//         return ++$count;
//     };

//     return $counter;
// }

// $counter = createCounter();

// echo $counter() . '</br>';
// echo $counter() . '</br>';
// echo $counter() . '</br>';
// echo $counter() . '</br>';


// $result = function ($number) {
//     return $number * $number;
// };

// $sq = $result(7);

// echo $sq;


function createCounter()
{
    $count = 0;

    $counter = function () use (&$count) {

        return ++$count;
    };

    return $counter;
}

echo createCounter()();
