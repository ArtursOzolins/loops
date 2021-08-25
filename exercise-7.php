<?php


class RollTwoDice {
    public $desiredNr;
    public $firstThrow;
    public $secondThrow;
    function diceRoller() {
        while ($this->firstThrow + $this->secondThrow !== $this->desiredNr) {
            $this->firstThrow = rand(1, 6);
            $this->secondThrow = rand(1, 6);
            $sum = $this->firstThrow + $this->secondThrow;
            echo "{$this->firstThrow} and {$this->secondThrow} = {$sum}" . PHP_EOL;
        }
    }
}

$player1 = new RollTwoDice();

$player1->desiredNr = (int) readline('Desired sum: ');

$player1->diceRoller();
