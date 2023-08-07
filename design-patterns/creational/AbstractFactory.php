<?php

/**
 * The Abstract Factory pattern allows us to 
 * create families of related objects (animals) in a modular and interchangeable way, 
 * making it easier to extend or switch implementations in the future
 */

abstract class Animal
{
    abstract public function makeSound(): string;
}

class Dog extends Animal
{
    public function makeSound(): string
    {
        return 'Woof!';
    }
}

class Cat extends Animal
{
    public function makeSound(): string
    {
        return 'Meoo!';
    }
}

abstract class HabitatFactory
{
    abstract public function createAnimal(): Animal;
}

class DogHabitatFactory extends HabitatFactory
{
    public function createAnimal(): Animal
    {
        return new Dog();
    }
}

class CatHabitatFactory extends HabitatFactory
{
    public function createAnimal(): Animal
    {
        return new Cat();
    }
}

function createAnimalAndMakeSound(HabitatFactory $factory)
{
    $animal = $factory->createAnimal();
    return $animal->makeSound();
}

echo createAnimalAndMakeSound(new DogHabitatFactory) . PHP_EOL;
echo createAnimalAndMakeSound(new CatHabitatFactory) . PHP_EOL;