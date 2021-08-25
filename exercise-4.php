<?php

$maxNr = (int) readline ('Enter max value: ');
$startNr = 1;
$lineLimit = 20;

$nrArray = [];
for ($i = 1; $i <= $maxNr; $i++) {
    array_push($nrArray, $i);
}

foreach ($nrArray as $value) {
    if ($value % 3 === 0 && $value % 5 === 0) {
        echo 'FizzBuzz ';
    } else if ($value % 5 === 0) {
        echo 'Buzz ';
    } else if ($value % 3 === 0) {
        echo 'Fizz ';
    } else {
        echo "{$value} ";
    }

    if ($value % 20 === 0) {
        echo PHP_EOL;
    }
}




/*
 * for ($i = 0; $i < $maxNr/$lineLimit; $i++) {
    for ($j = 0; $j < $lineLimit; $j++) {
        if ($startNr % 3 === 0 && $startNr % 5 === 0) {
            echo 'FizzBuzz ';
        } else if ($startNr % 5 === 0) {
            echo 'Buzz ';
        } else if ($startNr % 3 === 0) {
            echo 'Fizz ';
        } else {
            echo "{$startNr} ";
        }
        if ($startNr < $maxNr) {
            $startNr++;
        } else {
            break;
        }
    }
    echo PHP_EOL;
}
 */
