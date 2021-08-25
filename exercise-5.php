<?php

class Piglet {
    public $totalScore;
    public $current;

    function rollDice() {
        $random = rand(1,6);
        $this->totalScore += $random;
        $this->current = $random;
    }
}

$player1 = new Piglet;


echo 'Welcome to Piglet!' . PHP_EOL;
$choice = 'yes';
while ($choice === 'yes') {
    $player1->rollDice();
    echo "You rolled a {$player1->current}!" . PHP_EOL;
    if ($player1->current === 1) {
        $player1->totalScore = 0;
        echo "You got {$player1->totalScore} points.";
        break;
    }
$choice = readline('Roll again? yes/no: ');
    if ($choice === 'no') {
        echo "You got {$player1->totalScore} points." . PHP_EOL;
        break;
    } else if (!$choice == 'yes' || !$choice == 'no') {
        break;
    }
}

