<?php

//echo "Input number of terms: ";

//todo complete loop to multiply i with itself n times, it is NOT allowed to use built-in pow() function

$i = (int) readline ('Enter number: ');
$n = (int) readline ('Enter power: ');
$result = 1;

for ($j = 1; $j <= $n; $j++) {
    $result = $result * $i;
}

echo $result;
