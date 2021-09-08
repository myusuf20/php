<?php

class Person //Buat nama class sama dengan nama filenya
{
    //Constant didalam class
    const AUTHOR = "Universitas Gunadarma";

    //Attribut atau properties nama dengan tipe data string
    var string $name;
    //Attribut atau properties address dengan tipe data string boleh null
    var ?string $address = null;
    //Attribut atau properties country dengan nilai default Indonesia bertipe data string
    var string $country = "Indonesia";

    //Penggunaan Constructor
    function __construct(string $name, ?string $address)
    {
            $this->name = $name;
            $this->address = $address;
    }

    //Penggunaan self Keyword di function pada Class
    function info()
    {
        //self Keyword untuk memanggil constant didalam class saat ini
        echo "AUTHOR : " . self::AUTHOR . PHP_EOL;
    }

    //Penggunaan Function yang didalamnya menggunakan this Keyword
    function sayHello(?string $name)
    {
        if (is_null($name)) {
            echo "My name is $this->name" . PHP_EOL;
        } else {
            echo "Hallo $name, my name is $this->name" . PHP_EOL;
        }
    }

    //Penggunaan Destruction
    function __destruct()
    {
        echo "Object person {$this->name}, {$this->address}, dan {$this->country} is destroyed!" . PHP_EOL;
    }
}

