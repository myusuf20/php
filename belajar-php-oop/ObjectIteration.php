<?php

//class Data
//{
//    var string $first = "First";
//    public string $second = "Second";
//    private string $third = "Third";
//    protected string $forth = "Forth";
//}
//
////Pembuatan object dari class Data
//$data = new Data();
//
//foreach ($data as $property => $value) {
//    echo "$property : $value" . PHP_EOL;
//}

//Penggunaan IteratorAggregate pada iterator
class Data implements IteratorAggregate
{
    var string $first = "First";
    public string $second = "Second";
    private string $third = "Third";
    protected string $forth = "Forth";

    //membuat iterasi secara manual dengan ArrayIterator
//    public function getIterator()
//    {
//        $array = [
//            "first" => $this->first,
//            "second" => $this->second,
//            "third" => $this->third,
//            "forth" => $this->forth
//        ];
//
//        return new ArrayIterator($array);
//    }

    //Perbedaannya jika menggunakan Generator dengan kata kunci "yield"
    public function getIterator()
    {
        yield "first" => $this->first;
        yield "second" => $this->second;
        yield "third" => $this->third;
        yield "forth" => $this->forth;
    }
}

$data = new Data();

foreach ($data as $property => $value) {
    echo "$property : $value" . PHP_EOL;
}