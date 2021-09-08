<?php
namespace Data;

require_once "Food.php";

abstract class Animal
{
    public string $name;

    //Abstract function, semua class turunannya wajib memanggil functionnya
    abstract public function run(): void;

    //Turunan atau Child class pada AnimalFood
    abstract public function eat(AnimalFood $animalFood): void;
}

//class turunan dari class animal(parent)
class Cat extends Animal
{
    public function run(): void
    {
        echo "Cat $this->name is running" . PHP_EOL;
    }

    public function eat(AnimalFood $animalFood): void
    {
        echo "Cat is Eating" . PHP_EOL;
    }
}

class Dog extends Animal
{
    public function run(): void
    {
        echo "Dog $this->name is running" . PHP_EOL;
    }

    //Berikut adalah contravariance mengambil function yang tidak lebih
    //spesifik (parent) dari child class AnimalFood
    public function eat(Food $animalFood): void
    {
        echo "Dog is Eating" . PHP_EOL;
    }
}

