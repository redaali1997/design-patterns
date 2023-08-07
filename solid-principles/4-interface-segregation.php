<?php

/**
 * This principle states that a class should not be forced to implement interfaces it doesn't use. 
 * It's better to have multiple specific interfaces than one large interface
 */

// Example 1
interface Printer
{
    public function print();
}

interface Scanner
{
    public function scan();
}

class AllInOnePrinter implements Printer, Scanner
{
    public function print()
    {
        // Code to print
    }

    public function scan()
    {
        // Code to scan
    }
}


// Example 2
interface GrowableInterface
{
    public function grow($advanceNumberOfDays);
}

interface WeedableInterface
{
    public function weed();
}

interface GardenInterface extends GrowableInterface, WeedableInterface
{
}
