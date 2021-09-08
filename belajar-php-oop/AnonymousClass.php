<?php
//interface HelloWorld
//{
//    function sayHello(): void;
//}
//
//class SampleHelloWorld implements HelloWorld
//{
//    public function sayHello(): void
//    {
//        echo "Hello Wolrd" . PHP_EOL;
//    }
//}
//
//Pemanggilan objectnya
//$helloWorld = new SampleHelloWorld();
//$helloWorld->sayHello();

//Bila kasusnya simple seperti diatas, lebih baik menggunakan anonymous class
//interface HelloWorld
//{
//    function sayHello(): void;
//}
//
//$helloWolrd = new class implements HelloWorld
//{
//    public function sayHello(): void
//    {
//        echo "Hello Wolrd" . PHP_EOL;
//    }
//};
//
//$helloWolrd->sayHello();

//Anonymous Class dengan Constructor
interface HelloWorld
{
    function sayHello(): void;
}

$helloWold = new class ("Yusuf") implements HelloWorld {

    public string $name;

    //Constructor adalam anonymous class
    public function __construct(string $name) {
        $this->name = $name;
    }

    public function sayHello(): void
    {
        echo "Hello World" . PHP_EOL;
    }
};

$helloWold->sayHello();