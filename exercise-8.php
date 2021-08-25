<?php

class NumberSquare {
    public $min;
    public $max;
    public $array = [];

    function makeSquare() {
        for ($i = $this->min; $i <= $this->max; $i++) {
           array_push($this->array, $i);
        }
        for ($j = $this->min; $j <= $this->max; $j++) {
            echo implode($this->array) . PHP_EOL;
            $swapValue = array_shift($this->array);
            array_push($this->array, $swapValue);
        }
    }
}

$player1 = new NumberSquare();

$player1->min = (int) readline('Min? ');
$player1->max = (int) readline('Max? ');

$player1->makeSquare();
