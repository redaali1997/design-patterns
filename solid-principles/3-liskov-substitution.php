<?php

use EmptyGarden as GlobalEmptyGarden;

/**
 * This principle states that objects of a superclass should be replaceable 
 * with objects of its subclass without affecting the correctness of the program
 */

// Example 1
class Bird
{
    public function fly()
    {
        // Code to make a bird fly
    }
}

class Sparrow extends Bird
{
    public function fly()
    {
        // Code to make a sparrow fly
    }
}


// Example 2
class EmptyGarden
{
    private $plot;

    public function __construct(PlotArea $plot)
    {
        $this->plot = $plot;
    }

    public function items()
    {
        $numberOfPlots = $this->plot->totalNumberOfPlots();
        return array_fill(0, $numberOfPlots, 'handful of dirt');
    }
}

interface PlotArea
{
    public function totalNumberOfPlots();
}

class RectangleArea implements PlotArea
{
    private $width;
    private $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function totalNumberOfPlots()
    {
        return ceil($this->width * $this->height);
    }
}

echo '<pre>';
var_dump((new GlobalEmptyGarden(new RectangleArea(2, 3)))->items());
echo '</pre>';
