<?php

class Product
{
    private string $name; //Properties modifiernya bersifat private
    private int $price; //Properties modifiernya bersifat private

    public function __construct(string $name, int $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    //Agar bisa diakses diturunan atau diluar class, maka buat function untuk mengambil properties privatenya
    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): string
    {
        return $this->price;
    }
}

//Turunan class atau subclassnya
class ProductDummy extends Product
{
    public function info()
    {
        echo "Name : " . $this->getName() . PHP_EOL;
        echo "Price : " . $this->getPrice() . PHP_EOL;
    }
}