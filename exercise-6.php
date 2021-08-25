<?php

class AsciiFigure {
    public $size = 3;
    public $repeater = 0;

    function drawFigure() {
        for ($i = 1; $i <= $this->size; $i++) {
            echo str_repeat('////', $this->size-$i) . str_repeat('****', $this->repeater) . str_repeat("\\\\\\\\", $this->size-$i) . PHP_EOL;
            $this->repeater += 2;
        }
    }
}

$figure = new AsciiFigure();

$figure->drawFigure();

