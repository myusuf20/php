<?php
// Tipe data string adalah tipe data representasi dari teks
// String bisa mengandung kosong atau banyak karakter

// SINGLE QOUTE
echo 'Nama : ';
echo 'Mohammad Yusuf';
echo "\n";

// DOUBLE QUOTE
/* Selain single quote, kita juga bisa menggunakan double quote.
Salah satu kelebihan menggunakan double qoute adalah,
kita menggunakan escape sequence untuk beberapa hal, seperti \n untuk ENTER,
dan \t untuk TAB, dan \" untuk double quote, dan lain lain */
echo "Nama : ";
echo "Mohammad\t Yusuf\n";

// Multiline String
/*
- Kadang kita ingin membuat data string yang lebih dari satu baris.
  Untuk melakukan itu sebenarnya kita bisa menggunakan \n sebagai ENTER
- Namun PHP memiliki fitur yang lebih baik, yaitu bernama Heredoc, dan Nowdoc
*/
// HEREDOC
/* Heredoc adalah fitur untuk membuat String yang panjang,
sehingga kita tidak perlu manual melakukan enter,
tab dan yang lain - lain secara manual */
echo <<<TEKS
Ini adalah contoh string yang menggunakan heredoc. 
Pada <<<TEKS ditulis bebas, dan diakhiri dengan TEKS;.
TEKS;

// NOWDOC
/* Nowdoc mirip seperti Heredoc, yang membedakan adalah pada Nowdoc tidak
memiliki kemampuan parsing seperti di Heredoc atau Double Quote.
Masalah parsing akan kita bahas di materi Manipulasi String */
echo <<<'TEKS'
Ini adalah contoh string yang menggunakan nowdoc.
Pada <<<'TEKS' ditulis bebas, dan diakhiri dengan TEKS;.
TEKS;


