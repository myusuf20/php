<?php

class FizzBuzzTest {
    public function fizzBuzz(int $value) {
        for ($i=1; $i<=$value; $i++) {
            if ($i % 3 == 0 && $i % 5 == 0) {
                echo "FizzBuzz" . PHP_EOL;
            } else if ($i % 3 == 0) {
                echo "Fizz" . PHP_EOL;
            } else if ($i % 5 == 0) {
                echo "Buzz" . PHP_EOL;
            } else {
                echo $i . PHP_EOL;
            }
        }
    }
}

$testingFizzBuzz = new FizzBuzzTest();
$testingFizzBuzz->fizzBuzz(100);