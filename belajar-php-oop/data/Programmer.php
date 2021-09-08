<?php

//Class parent (Programmer)
class Programmer
{
    public string  $name;

    public function __construct(string $name)
    {
        $this->name=$name;
    }

}

//Memiliki dua turunan(inheritance) atau class child
//BackendProgrammer dan FrontendProgrammer
class BackendProgrammer extends Programmer
{

}

class FrontendProgrammer extends Programmer
{

}

//Membuat polymorphisme dari class parent (Programmer) dan class child atau turunannya
class Company
{
    //property programmer dengan tipe Programmer(Parent dari class Programmer)
    public Programmer $programmer;
}

//Kita bisa juga membuat function argument polymorphism
function sayHelloProgrammer(Programmer $programmer)
{
    //Pengecekan tipe data object class (TYPE CHECK & CASTS)
    if ($programmer instanceof BackendProgrammer) {
        echo "Hello Backend Programmer $programmer->name" . PHP_EOL;
    } else if ($programmer instanceof FrontendProgrammer) {
        echo "Hello Frontend Programmer $programmer->name" . PHP_EOL;
    } else if ($programmer instanceof Programmer) {
        echo "Hello Programmer $programmer->name" . PHP_EOL;
    }
}