<?php

// function sayHello()
// {
//     echo 'Hello World';
// }
// sayHello();


// function add($a = 1, $b = 5)
// {
//     return $a + $b;
// }


// echo add(6, 10);
// echo add(6);


function addAll(...$numbers)
{
    $total = 0;

    foreach ($numbers as $number) {
        $total += $number;
    }

    return $total;
}

echo addAll(5, 55, 100);
