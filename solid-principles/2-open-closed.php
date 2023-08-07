<?php

/**
 * Open for extension but closed for modification
 */

require './single-responsibilty.php';

class MarijuanaGarden extends EmptyGarden 
{
    public function items()
    {
        return array_fill(0, $this->width * $this->height, 'weed');
    }
}

echo '<pre>';
var_dump((new MarijuanaGarden(2,3))->items());
echo '</pre>';