<?php
namespace Color\Component;

/**
 * Interface ColorInterface
 *
 * @uthor   Faizal Pribadi  <faizal.pribadi@gmail.com>
 * @license MIT
 *
 * @package Color\Component
 */
interface ColorInterface
{
    const COLOR_BLACK   = 30;
    const COLOR_RED     = 31;
    const COLOR_GREEN   = 32;
    const COLOR_YELLOW  = 33;
    const COLOR_BLUE    = 34;
    const COLOR_CYAN    = 36;
    const COLOR_WHITE   = 37;


    /**
     * Display is function to set color and displaying output
     *
     * @param string $name      set the color name
     * @param string $argument  set the argument for displaying output
     *
     * @api
     */
    public function display($name, $argument);
}