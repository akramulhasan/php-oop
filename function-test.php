<?php

$string = 'My Name Is Akramul Hasan Munna MUNNAVAIMBBS';

function findLongWord($st)
{
    $st_array =  explode(' ', $st);

    $max_value = 0;
    $big_item = '';

    foreach ($st_array as $item) {

        if (strlen($item) > $max_value) {
            $max_value = strlen($item);
            $big_item = $item;
        }
    }

    return $big_item;
}

//var_dump(findLongWord($string));

echo findLongWord($string);
