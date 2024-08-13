<?php

// Global scope
$name = 'Akram';



function sayHello()
{
    // Local scope
    global $name;

    $name = 'Hasan';
    return $name;
}

echo 'executing beore function ' . $name . '</br>';

echo sayHello() . '</br>';

echo 'executing after function ' . $name . '</br>';
