<?php
//Menggunakan Array Iterator
function getGenap(int $max): Iterator
{
    $array = [];

    for ($i = 1; $i <= $max; $i++) {
        if ($i % 2 == 0) {
            $array[] = $i;
        }
    }
    return new ArrayIterator($array);
}

foreach (getGenap(10) as $value) {
    echo "Genap : $value" . PHP_EOL;
}

//Perbedaanya jika menggunakan Generator dengan kata kunci "yied"
function getGanjil(int $max): Iterator
{
    for ($i = 1; $i <= $max; $i++) {
        if ($i % 2 == 1) {
            yield $i;
        }
    }
}

foreach (getGanjil(10) as $value) {
    echo "Ganjil : $value" . PHP_EOL;
}