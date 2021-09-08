<?php
namespace Data;

require_once "Animal.php";

//Penggunaan Covariance
interface AnimalShelter
{
    function adobt(string $name): Animal;
}

//Dengan kemampuan covariance kita bisa return function yang lebih spesifik lagi dari parent class Animal,
//misalkan kita ingin menggunakan turunannya (child) yaitu class Cat dan Dog dari parent class Animal.
class CatShelter implements AnimalShelter
{
    public function adobt(string $name): Cat
    {
        $cat = new Cat();
        $cat->name = $name;
        return $cat;
    }
}

class DogShelter implements AnimalShelter
{
    public function adobt(string $name): Dog
    {
        $dog = new Dog();
        $dog->name = $name;
        return $dog;
    }
}