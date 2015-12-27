<?php
namespace Color\Component;

use Color\Component\Exception\NotFoundException;
use Color\Component\Exception\DoesNotSupportException;

/**
 * Class Color
 *
 * @author  Faizal Pribadi  <faizal.pribadi@gmail.com>
 * @license MIT
 *
 * @package Color\Component
 */
class Color implements ColorInterface
{
    /**
     * Self indexing the color name
     *
     * @var array
     */
    protected $colors = [
        'black'     => ColorInterface::COLOR_BLACK,
        'red'       => ColorInterface::COLOR_RED,
        'green'     => ColorInterface::COLOR_GREEN,
        'yellow'    => ColorInterface::COLOR_YELLOW,
        'blue'      => ColorInterface::COLOR_BLUE,
        'cyan'      => ColorInterface::COLOR_CYAN,
        'white'     => ColorInterface::COLOR_WHITE
    ];

    /**
     * Display function is render to argument with coloring output
     *
     * @param string $name  Set the name of color
     * @param string $argument  Set the argument for displaying output with color
     *
     * @return string
     *
     * @throws NotFoundException
     * @throw DoesNotSupportException
     */
    public function display($name, $argument)
    {
        if (!array_key_exists($name, $this->colors)) {
            throw new NotFoundException(
                sprintf('The color name of %s must be set or not available', $name)
            );
        }

        //TODO: window - linux
        if (defined('PHP_WINDOWS_VERSION_BUILD')
            || function_exists('posix_isatty')
            || getenv('ANSICON')
            || isset($this->colors[$name])) {

            return sprintf("\033[%sm%s\033[0m", $this->colors[$name], $argument);
        }

        throw new DoesNotSupportException('Color does not support on you are system');
    }
}