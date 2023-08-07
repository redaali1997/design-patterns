<?php

/**
 *  a class should have a single responsibility
 */

class EmptyGarden
{
    protected $width;
    protected $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function items()
    {
        $numberOfSpots = ceil($this->width * $this->height);
        return array_fill(0, $numberOfSpots, 'handful of dirt');
    }
}

echo '<pre>';
var_dump((new EmptyGarden(2, 3))->items());
echo '</pre>';
