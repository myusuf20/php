<?php

//class Zero
//{
//    private array $properties = [];
//
//    //Ketika object yang dipanggil tidak ada pada properties,
//    //maka yang akan di panggil secara otomatis adalah function __get()
//    public function __get($name)
//    {
//        echo "Access property $name" . PHP_EOL;
//        return "CONTOH";
//    }
//
//    //Ketika object yang diubah tidak ada pada properties,
//    //maka yang akan di panggil secara otomatis adalah function __set()
//    public function __set($name, $value)
//    {
//        echo "Set property $name with value $value" . PHP_EOL;
//    }
//
//    public function __isset($name): bool
//    {
//        echo "Isset $name" . PHP_EOL;
//        return false;
//    }
//
//    public function __unset($name)
//    {
//        echo "Unset $name" . PHP_EOL;
//    }
//}
//
//$zero = new Zero();
//echo $zero->firstName . PHP_EOL; //Properties firstName tidak ada
//$zero->firstName = "Yusuf"; //Properties firstName untuk diubah tidak ada
//isset($zero->firstName);
//unset($zero->firstName);

//Dynemic Overloading
class Zero
{
    private array $properties = [];

    //__call untuk function object biasa
    public function __call($name, $arguments)
    {
        $join = join(", ", $arguments);
        echo "Call function $name with arguments $join" . PHP_EOL;
    }

    //__callStatic untuk function static
    public static function __callStatic($name, $arguments)
    {
        $join = join(", ", $arguments);
        echo "Call static function $name with arguments $join" . PHP_EOL;
    }
}

$zero = new Zero();
$zero->sayHello("Mohammad", "Yusuf"); //memanggil call function
Zero::sayHello("Mohammad", "Yusuf"); //memanggil call static function