<?php

//Tipe Data Integer
echo "Decimal : ";
var_dump(12345);

echo "Octal : ";
var_dump(01234);

echo "Hexadecimal : ";
var_dump(0x1A);

echo "Binary : ";
var_dump(0x111111);

echo "Undescore in number : ";
var_dump(1_241_241_241);

// Integer Overflow
/*secara default kapasitassistem operasi 32bit itu 2147483647,
sedangkan untuk sistem operasi 64bit itu 9223372036854775807 */
/* Bila number integer melebihi nilai tersebut, maka secara otomatis
tipe numbernya akan berubah menjadi floating point */
echo "Integer Overflow 32 Bit : "; // Dilebihkan 1
var_dump(2147483648);

echo "Integer Overflow 64bit : "; // Dilebihkan 1 akan overflow, dan menjadi float
var_dump(9223372936854775808);

// Tipe Data Floating
echo "Floating Point : ";
var_dump(1.234);

echo "Floating Point dengan E notation Plus (1.2 x 1000) : ";
var_dump(1.2e3);

echo "Floating Point dengan E notation Minus (7 x 0.001) : ";
var_dump(7e-3);

echo "Underscore di Floating Point : ";
var_dump(1_234.567);
