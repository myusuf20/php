<?php
//Pembuatan class parent manager
class Manager
{
    var string $name;
    var string $title;

    //Agar tidak error ketika memanggil object tanpa argument, maka function
    //constructornya pada argument awal atau $name diberi nilai default kosong.
    public function __construct(string $name = "", string $title = "Manager")
    {
        $this->name = $name;
        $this->title = $title;
    }

    //function void adalah tidak mengembalikan nilai
    public function sayHello(string $name): void
    {
        echo "Hi $name, I'm Manager my name is $this->name" . PHP_EOL;
    }
}

//Class child dari class parent (Manager)
class VicePresident extends Manager
{
    //Overriding constructer yang ada di class parent Managger
    public function __construct(string $name = "")
    {
        //direkomendasikan untuk memanggil parent yang ada di classnya (Manager)
        //, tapi tidak wajib.
        parent::__construct($name, "VP");
    }

    public function sayHello(string $name): void
    {
        echo "Hi $name, I'm Vice President my name is $this->name" . PHP_EOL;
    }
}
