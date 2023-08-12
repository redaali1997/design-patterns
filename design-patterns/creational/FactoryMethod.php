<?php

// Product
interface Animal
{
    public function makeSound();
}

// Concrete Products
class Dog implements Animal
{
    public function makeSound()
    {
        return "Woof!";
    }
}

class Cat implements Animal
{
    public function makeSound()
    {
        return 'Meow!';
    }
}

// Creator
interface AnimalFactory
{
    public function createAnimal();
}

// Concrete Creators
class DogFactory implements AnimalFactory
{
    public function createAnimal()
    {
        return new Dog;
    }
}

class CatFactory implements AnimalFactory
{
    public function createAnimal()
    {
        return new Cat;
    }
}

function animalSound(AnimalFactory $animalFactory) {
    $animal = $animalFactory->createAnimal();
    return $animal->makeSound();
}

echo animalSound(new DogFactory) . PHP_EOL;
echo animalSound(new CatFactory) . PHP_EOL;