<?php
// For Loop
/*
 - For adalah salah satu kata kunci yang bisa digunakan untuk melakukan perulangan.
 - Blok kode yang terdapat di dalam for akan selalu diulangi selama kondisi for terpenuhi.
 */

// Sintak Perulangan For
/*
 for(init statement; condition; post statement) {
    //Block perulangan
 }

 - Init statement akan dieksekusi hanya sekali di awal sebelum perulangan
 - Kondisi akan dilakukan pengecekan dalam setiap perulangan, jika true perulangan akan dilakukan,
   jika false perulangan akan berhenti.
 - Post statement akan dieksekusi setiap kali diakhiri perulangan
 - Init statement, Condition, dan Post Statement tidak wajib diisi, jika kondisi tidak diisi,
   berarti kondisi selalu bernilai true.
 */

// Perulangan For Tidak Berhenti
for ( ; ; ) {
    echo "Ini adalah for loop" . PHP_EOL;
}

// Perulangan For Dengan Kondisi
$counter = 1;

for (; $counter <=10;) {
    echo "Ini adalah for loop ke-$counter" . PHP_EOL;
    $counter++;
}

// Perulangan Dengan Init Statement dan Konidisi
for ($counter = 1; $counter <=10;) {
    echo "Ini adalah for loop ke-$counter" . PHP_EOL;
    $counter++;
}

// Perulangan Dengan Init Statement, Kondisi, Post Statement
for ($counter = 1; $counter <= 10; $counter++) {
    echo "Hello For Loop : " . $counter . PHP_EOL;
}

// Syntax Alternative For Loop
for ($counter = 1; $counter <= 10; $counter++) :
    echo "Hello For Loop : " . $counter . PHP_EOL;
endfor;