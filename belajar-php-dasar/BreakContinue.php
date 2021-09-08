<?php
// Break & Countinue
/*
 - Pada switch statement, kita sudah mengenal kata kunci break, yaitu untuk menghentikan
   case dalam switch.
 - Sama dengan pada perulangan, break juga digunakan untuk menghentikan seluruh perulangan.
 - Namun berbeda dengan continue, continue digunakan untuk menghentikan perulangan saat ini,
   lalu melanjurkan ke perulangan selanjutnya.
 */

// Contoh Penggunaan Break
$counter = 1;

while (true) {
    echo "Hello Break : " . $counter . PHP_EOL;
    $counter++;

    if ($counter > 10) {
        break;
    }
}

// Contoh Penggunaan Continue
for ($counter = 1; $counter <= 100; $counter++) {
    if ($counter % 2 == 0) {
        continue;
    } else {
        echo "Hello continue : $counter" . PHP_EOL;
    }
}