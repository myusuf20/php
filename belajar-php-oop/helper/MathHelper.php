<?php

namespace Helper;

class MathHelper
{
    //Ketika menggunaan static, maka tidak bisa menggunakan object,
    //tapi menggunakan classnya
    static public function sum(int... $numbers): int
    {
        $total = 0;
        foreach ($numbers as $number) {
            $total += $number;
        }
        return $total;
    }
}

$total = MathHelper::sum(10, 20, 30, 40, 50);
echo "Total $total" . PHP_EOL;