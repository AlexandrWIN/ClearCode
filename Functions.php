<?php

function sayHello () {
    echo 'Hello<hr>';
}
sayHello();

function plusOne ($a) {
    echo ++$a . '<br>';
}

function multiply (int $a, int $b) {
    echo $a * $b . '<br>';
}

function sumNumbers ($a, $b, $c = 10) {
    echo $a + $b + $c . '<br>';
}

$numbers = [1, 8, 14, 3, 5, 4];

function maxNumber (array $numbers) {
    $max = $numbers[0];
    foreach ($numbers as $number) {
        if ($number > $max) {
            $max = $number;
        }
    }
    return $max;
}

$numbers = [1, 8, 14, 3, 5, 4];
function sumArray (array $numbers) {
    $res = 0;
    foreach ($numbers as $number) {
        $res += $number;
    }
    return $res;
}

plusOne(43);
multiply(40, 5);
sumNumbers(1, 3);