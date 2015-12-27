<?php

use Color\Component\Color;
use Color\Component\ColorInterface;

class Display
{
    public function render($value)
    {
        return $value;
    }
}

$color = new Color();
$display = new Display();
echo $color->display('cyan', $display->render('Hello World'));