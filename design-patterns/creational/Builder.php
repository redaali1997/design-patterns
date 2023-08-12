<?php

// Product
class Computer
{
    private string $processor;
    private string $memory;
    private string $storage;

    public function setProcessor($processor)
    {
        $this->processor = $processor;
    }

    public function setMemory($memory)
    {
        $this->memory = $memory;
    }

    public function setStorage($storage)
    {
        $this->storage = $storage;
    }

    public function showInfo()
    {
        return "Processor: {$this->processor}, Memory: {$this->memory}, Storage: {$this->storage}" . PHP_EOL;
    }
}

// Builder
interface ComputerBuilder
{
    public function buildProcessor();
    public function buildMemory();
    public function buildStorage();
    public function getResult(): Computer;
}

// Concrete Builder
class BasicComputerBuilder implements ComputerBuilder
{
    private Computer $computer;

    public function __construct()
    {
        $this->computer = new Computer();
    }

    public function buildProcessor()
    {
        $this->computer->setProcessor('Basic Processor');
    }

    public function buildMemory()
    {
        $this->computer->setMemory('4 GB');
    }

    public function buildStorage()
    {
        $this->computer->setStorage('256 GB SSD');
    }

    public function getResult(): Computer
    {
        return $this->computer;
    }
}

// Director
class ComputerEngineer
{
    private ComputerBuilder $builder;

    public function __construct(ComputerBuilder $builder)
    {
        $this->builder = $builder;
    }

    public function buildComputer()
    {
        $this->builder->buildProcessor();
        $this->builder->buildMemory();
        $this->builder->buildStorage();
    }

    public function getComputer(): Computer
    {
        return $this->builder->getResult();
    }
}

$builder = new BasicComputerBuilder;
$engineer = new ComputerEngineer($builder);
$engineer->buildComputer();
echo $engineer->getComputer()->showInfo();
