<?php

$firstWord = readline('Enter first word: ');
$secondWord = readline('Enter second word: ');

$difference = 30 - strlen($firstWord) - strlen($secondWord);

echo $firstWord;
for ($i = 1; $i <= $difference; $i++) {
    echo '.';
}
echo $secondWord;