<?php

namespace Data\Traits;

trait SayGoodBye
{
    public function goodBye(?string $name): void
    {
        if(is_null($name)) {
            echo "Good Bye" . PHP_EOL;
        } else {
            echo "Good bye $name". PHP_EOL;
        }
    }
}

trait SayHello
{
    public function hello(?string $name): void
    {
        if(is_null($name)) {
            echo "Hello" . PHP_EOL;
        } else {
            echo "Hello $name". PHP_EOL;
        }
    }
}

trait HasName
{
    public string $name;
}

//Trait yang ada abstract functionnya
trait CanRun
{
    public abstract function run(): void;
}

//Penggunaan Trait Inheritance (Pewarisan Trait)
trait All
{
    //Memanggil trait lain didalam trait
    use SayGoodBye, SayHello, HasName, CanRun {
        //bisa di override visibility function
        //hello as private;
        //goodBye as private;
    }
}

class ParentPerson
{
    public function goodBye(?string $name): void
    {
        echo "Good bye in Person" . PHP_EOL;
    }

    public function hello(?string $name): void
    {
        echo "Hello in Person" . PHP_EOL;
    }
}

class Person extends ParentPerson
{
    //Menggunakan atau memanggil trait dengan keyword "use".
    use All;

    //Maka wajib dioverride trait yang terdapat abstact functionnya
    public function run(): void
    {
        echo "Person $this->name is running" . PHP_EOL;
    }
}


