<?php
// Goto Operator
/*
 - Salah satu fitur yang sebenarnya jarang sekali digunakan di PHP adalah goto operator.
 - Kenapa jarang digunakan karena jika terlalu banyak menggunakan goto operator,
   kode program aplikasinya akan mudah membingungkan yang membaca kodenya.
 - Goto adalah fitur dimana kita bisa loncat ke kode program sesuai dengan keinginan kita.
 - Agar goto bisa loncat ke kode program, kita harus membuat label di PHP dengan
   menggunakan nama label lalu akhiri :(colon).
 */

goto a;
echo "Hello World" . PHP_EOL;

a: //Label
echo "Hello A" . PHP_EOL;

// Goto Operator di Loop
$counter = 1;
while (true) {
    echo "While Loop $counter" . PHP_EOL;
    $counter++;

    if ($counter > 10) {
        goto end;
    }
}

end:
echo "End Loop";