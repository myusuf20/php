<?php
// VARIABLE
/*
- Variable adalah tempat untuk menyimpan data sehingga bisa kita gunakan lagi di kode program selanjutnya.
- Di PHP variable bisa menampung berbagai jenis tipe data dan bisa berubah - ubah tipe data.
- Untuk membuat variable kita bisa menggunakan tanda $(dolar) diikuti dengan nama variablenya
- Penamaan variable tidak boleh mengandung spasi
 */

$name = "Mohammad";
$age = "22";
echo "\n";

echo "Name : ";
echo $name;
echo "\n";

echo "Age : ";
echo $age;
echo "\n";

// Variable Variables
/*
- PHP memiliki kemampuan variable variables, yaitu membuat variable dari string value variable
- Walaupun fitur ini ada, tapi fitur ini sangat membinugngkan jika digunakan secara luas,
  jadi disarankan untuk tidak menggunakan fitur ini kecuali memang diperlukan
- Untuk membuat variable dari value variable kita bisa menggunakan $$ diikuti dengna nama variablenya.
*/
$contoh = "yusuf";
$$contoh = "mohammad";

echo "Contoh : ";
echo $contoh;
echo "\n";

echo "yusuf : ";
echo $yusuf; // Outputnya mohammad
echo "\n";