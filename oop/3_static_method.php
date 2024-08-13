<?php

class MathUtil
{
    public static $pi = 3.14;

    public static function sum(...$nums)
    {
        return array_sum($nums);
    }
}


echo MathUtil::$pi;

echo MathUtil::sum(10, 20, 30);
