<?php
// Require_once dan Include_once
/*
 - Function require dan include akan selalu mengambil file yang kita inginkan.
 - Jika kita beberapa kali menggunakan require dan include file yang sama,
   maka file tersebut akan berkali - kali pula kita ambil.
 - Hal ini akan menjadi masalah jika misal dalam file yang kita ambil terdapat definisi funtion,
   sehingga jika diambil berkali - kali akan menyebabkan error redeclare function.
 - Untungnya di PHP terdapat function require_once dan include_once, function ini bisa
   mendeteksi jika kita sebelumnya pernah mengambil file yang sama, maka tidak akan diambil lagi.
 */

require_once "Lib/MyFunction.php";
include_once "Lib/MyFunction.php";

echo sayHello("Mohammad", "Yusuf");