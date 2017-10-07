<?php

function fibonaci($number, $amount, $a, $b)
{
    $c = $a + $b;
    $amount = $amount + $b;
    if ($c <= $number) {
		
        return fibonaci($number, $amount, $b, $c);
    }

    return $amount;
}



$a = 0;
$b = 1;
$amount = 0;
$maxNumber = 6;

echo fibonaci($maxNumber, $amount, $a, $b);