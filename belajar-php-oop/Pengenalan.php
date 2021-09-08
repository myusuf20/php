<?php

/**
 * PENGENALAN OBJEK ORIENTED PROGRAMMING
 Object Oriented Programming adalah sudut pandang bahasa pemrograman yang berkonsep "objek", fokus utama dalam OOP adalah objek itu sendiri
 ada banyak sudut pandang bahasa pemrograman, seperti function programming, prosedural programming, object oriented programming, namun OOP adalah yang sangat populer saat ini.
 Ada beberapa istilah yang perlu dimengerti dalam OOP yaitu Object dan Class.
 Apa itu object?
 Object adalah data yang berisi field/properties/attribut yang didalamnya terdapat method/function/behavior.
 Apa itu class?
 Class adalah blueprint, prototype atau cetakan untuk membuat object.
 Class berisikan deklarasi semua properties dan functions yang dimiliki oleh object.
 Setiap object selalu dibuat dari class, dan sebuah Class bisa membuat Object tanpa batas.
 */

/**
 * CLASS
 * Untuk membuat class, kita bisa menggunakan kata kunci class. Penamaan class biasa menggunakan format CamelCase.
 * Tidak ada standar baku dalam penamaan file yang sama dengan penamaan class,
 * hanya saja lebih baik diberi nama yang sama untuk mempermudah dalam mencari nama classnya.
 */

/**
 * OBJECT
 * Object adalah hasil instansiasi dari sebuah class.
 * Untuk membuat object kita bisa menggunakan kata kunci "new", dan diikuti dengan nama Class dan kurung()
 */

/**
 * PROPERTIES
 * Fields/Properties/Attributes adalah data yang bisa kita sisipkan didalam Object.
 * Namun sebelum kita bisa memasukkan data di fields, kita harus mendeklarasikan data apa aja yang dimiliki object tersebut didalam deklarasi classnya.
 * Membuat field sama seperti membuat variable, namun ditempatkan diblock class, namun diawali dengan kata kunci var.
 * MANIPULASI PROPERTIES
 * Fields yang ada di object, bisa kita manipulasi.
 * Untuk memanipulasi data field, sama seperti cara pada variable.
 * Untuk mengakses field, kita butuh kata kunci -> setelah nama object dan diikuti nama fieldsnya
 * PROPERTIES TYPE DECLARATION
 * Sama seperti di function, di properties kita bisa membuat type declaration.
 * Ini membuat PHP otomatis mengecek tipe data yang sesuai dengan type declaration yang telah ditentukan.
 * Jika kita mencoba mengubah properties dengan type yang berbeda, maka otomatis akan error.
 * Ingat, bahwa PHP memiliki fitur type juggling yang secara otomatis bisa mengkonversi ke tipe data lain
 * Untuk menambahkan type declaration, kita bisa tambahkan setelah kata kunci var di properties.
 * DEFAULT PROPERTIES VALUE
 * Sama seperti variable, di properties juga kita bisa langsung mengisi valuenya.
 * Ini mirip seperti default value, jadi jika tidak diubah diobject, maka properties akan memiliki value tersebut.
 * NULLABLE PROPERTIES
 * Saat kita menambahkan type declaration di properties atau di function argument,maka secara otomatis kita tidak bisa
 * mengirim data null ke dalam properties atau function argument tersebut.
 * Di PHP 7.4 dikenalkan nullable type, jadi kita mengirim data null ke properties atau function arguments.
 * Caranya sebelum type declarationnya kita bisa tambahkan tanda tanya atau ?.
 */

/**
 * FUNCTION
 * Selain menambahkan properties, kita juga bisa menambahkan function ke object.
 * Caranya dengan mendeklarasikan function tersebut didalam black class.
 * Sama seperti function biasanya, kita juga bisa menambahkan return value dan parameter untuk mengakses function tersebut,
 * kita bisa menggunakan tanda -> dan diikuti dengan nama methodnya, sama seperti mengakses properties.
 * THIS KEYWORD
 * Saat kita membuat kode pada function didalam class, kita bisa menggunakan kata kunci this untuk mengakses object saat ini.
 * Misal kadang kita butuh mengakses properties atau function lain di class yang sama.
 */

/**
 * CONSTANT
 * Properties di class bisa diubah, mirip seperti variable
 * di class kita juga bisa membuat constant, data tidak bisa diubah atau hanya menempel pada class
 * berbeda dengan attribut yang menempel pada objek sehingga data bisa berubah - ubah.
 * Di materi PHP Dasar, kita belajar untuk membuat constant itu perlu menggunakan function define()
 * Namun sejak PHP 7.4 kita bisa menggunakan kata kunci "const" untuk membuat constant, mirip seperti variable, namun tidak menggunakan karakter $
 * PROPERTIES VS CONSTANT
 * Saat kita membuat object, properties yang terdapat di class akan secara otomatis dibuat perobject,
 * oleh karena itu untuk mengakses properties, kita perlu menggunakan object, atau jika dari dalam object tersebut sendiri,
 * kita perlu menggunakan kata kunci this.
 * Sedangkan berbeda dengan constant, constant di class tidak akan dibuat perobject. Constant itu hidupnya hanya di class, bukan di object,
 * oleh karena itu untuk mengaksesnya kita perlu menggunakan NamaClass::NAMA_CONSTANT.
 * Secara sederhana, properties akan dibuat satu per instance class atau object, sedangkan constant dibuat satu per class.
 * SELF KEYWORD
 * Jika didalam class (misal di function) kita ingin mengakses constant, kita perlu mengakses menggunakan NamaClass::NAMA_CONSTANT
 * Namun jika didalam class yang sama, kita bisa menggunakan kata kunci self untuk mempermudah.
 * Penggunaan self keyword sama dengan penggunaan this akan tetapi perbedaanya,
 * self digunakan pada class saat ini sedangkan this digunakan pada object saat ini.
 */

/**
 * CONSTRUCTOR
 * Saat kita membuat Object, maka kita seperti memanggil sebuah function, karena kita menggunakan kurung().
 * Didalam class PHP, kita bisa membuat constructor adalah function yang akan dipanggil saat pertama kali Object dibuat.
 * Mirip seperti di function, kita bisa memberi parameter atau argument pada constructor hanya saja bedanya tidak bisa mengembalikan nilai atau return value.
 * Bila misalkan kita menggunakan dua parameter atau argument di constructor, ketika harus atau wajib membuat sebuah object sesuai dengan parameter yang di constructornya.
 * Nama constructor di PHP haruslah __construct()
 *
 */

/**
 * DESTRUCTOR
 * Jika constructor adalah function yang akan dipanggil ketika object dibuat,
 * maka desctructor adalah function yang akan dipanggil ketika object dihapus dari memory.
 * Biasanya ketika object tersebut sudah tidak lagi digunakan, atau ketika aplikasi akan mati.
 * Dalam membuat function destructor, kita bisa menggunakan nama function __destruct()
 * Khusus untuk destructor, kita tidak bisa menambahkan function argument atau parameter.
 * Dalam penggunaan sehari - hari, biasanya untuk menutup koneksi ke database
 * atau menutup proses menulis ke file, sehingga tidak terjadi memory leak.
 */

/**
 * INHERITANCE (PARENT & CHILD)
 * Inheritance atau pewarisan adalah kemampuan untuk menurunkan sebuah class ke class lain,
 * yang dalam artian kita bisa membuat class Parent dan class Child.
 * Pada class Child hanya bisa punya satu class Parent, namun satu class Parent bisa punya banyak class Child.
 * Saat sebuah class diturunkan, maka semua properties dan function yang ada di class Parent,
 * secara otomatis akan dimiliki oleh class Child.
 * Dalam melakukan pewarisan, di class Child kita harus menggunakan kata kunci "extends"
 * lalu diikuti dengan nama class parentnya.
 * PERENT KEYWORD (SUPER KEYWORD)
 * Kadang kita ingin mengakses function yang terdapat di class parent yang sudah terlanjur
 * kita override di class child.
 * Untuk mengakses function milik class perent, kita bisa menggunakan kata kunci perent.
 * Sederhananya, perent digunakan untuk mengkases class parent.
 */

/**
 * NAMESPACE
 * Saat kita membuat aplikasi, bisa dipastikan kita akan banyak sekali membuat class
 * Jika class terlalu banyak, kadang akan menyulitkan kitauntuk mencari atau mengklasifikasikan jenis - jenis class
 * PHP memiliki fitur namespace, dimana kita bisa menyimpan class - class kita didalam namespace.
 * Namespace bisa nested, dan jika kita ingin mengakses class yang terdapat di namespace, kita perlu menyebutkan
 * nama namespacenya.
 * Namespace bagus ketika kita punya beberapa class yang sama, dengan menggunakan namespace nama class sama
 * tidak akan menjadikan error di PHP.
 * MEMBUAT NAMESPACE
 * Untuk membuat namespace, kita bisa menggunakan kata kunci namespace
 * Jika kita ingin membuat sub namespace, kita cukup gunakan karakter \ setelah namespace sebelumnya.
 * FUNCTION DAN CONSTANT DI NAMESPACE
 * Selain class, kita juga bisa menggunakan function dan constant di namespace.
 * Dan kita ingin menggunakan function atau constant tersebut, kita bisa menggunakannya dengan diawali dengan nama namespacenya.
 * GLOBAL NAMESPACE
 * Secara default saat kita membuat kode di PHP sebenarnya itu disimpan di global namespace.
 * Global namespace adalah namespace yang tidak memiliki nama namespace.
 * IMPORT
 * ======
 * USE KEYWORD
 * Sebelumnya kita sudah tahu bahwa untuk menggunakan class, function atau constant di namespace kita perlu
 * menyebutkan nama namespacenya di awal.
 * Jika terlalu sering menggunakan class, function atau constant yang sama, maka teralalu banyak
 * duplikasi dengan menyebut namespace yang sama berkali - kali.
 * Hal ini bisa kita hindari dengan cara mengimport class, funtion atau constant tersebut
 * dengan menggunakan kata kunci use.
 * ALIAS
 * Saat kita menggunakan use, artinya kita tidak perlu lagi menggunakan nama namespace diawal
 * class ketika kita ingin membuat class tersebut.
 * Namun bagaimana jika kita ternyata nama classnya sama?
 * Untungnya PHP memiliki fitur yang namanya alias
 * Alias adalah kemampuan membuat nama lain dari class, function atau constant yang ada
 * Kita bisa menggunakan kata kunci as setelah melakukan use.
 * GROUP USE DECLARATION
 * Kadang kita butuh melakukan import banyak hal di satu namespace yang sama
 * PHP memiliki fitur grup use, dimana kita bisa import beberapa class,
 * function atau constant dalam satu perintah use
 * Untuk melakukan itu, kita bisa menggunakan kurung kurawal {}
 */

/**
 * VISIBILITY
 * Visibility atau Accsess modifier adalah kemampuan properties, function dan constant dapat diakses dari mana saja.
 * Secara default, properties, function dan constant yang kita buat didalam class bisa diakses dari
 * mana saja, atau artinya dia adalah public.
 * Selain public, masih ada beberapa visibility lainnya.
 * Secara default kata kunci var untuk properties adalah sifatnya public.
 * ACCSESS LEVEL VISIBILITY
 * public -> Class = Y, Subclass = Y, World = Y
 * protected -> Class = Y, Subclass = Y, Word = N
 * private -> Class = Y, Subclass = N, Word = N
 */

/**
 * FUNCTION OVERRIDING
 * Function overriding adalah kemampuan mendeklarasikan ulang function di child class yang sudah ada di parent class.
 * Saat kita melakukan proses overriding tersebut, secara otomatis ketika kita membuat object dari class child,
 * function yang di class parent tidak bisa diakses lagi.
 */

/**
 * CONSTRUCTOR OVERRIDING
 * Karena constructor sama seperti function, maka constructor-pun bisa kita deklarasikan ulang di class Childnya.
 * Sebenarnya di PHP, kita bsia meng-override function dengan arguments yang berbeda,
 * namun sangat tidak disarankan.
 * Jika kita melakukan override function dengan arguments berbeda, maka PHP akan menampilkan WARNING
 * Namun berbeda dengan contructor overriding, kita boleh meng-override dengan mengubah argumentnya,
 * akan tetapi direkomendasikan untuk memanggil parent constructor.
 */

/**
 * POLYMORPHISM
 * Polymorphism berasal dari bahasa Yunani yang berarti banyak bentuk.
 * Dalam OOP, Polymorphism adalah kemampuan sebuah object berubah bentuk menjadi bentuk lain.
 * Polymorphism erat hubungannya dengan Inheritance.
 */

/**
 * TYPE CHECK & CASTS
 * Sebelumnya kita sudah tau cara melakukan konversi tipe data bukan object class (is_string, is_boolean, dll)
 * Khusus untuk tipe data object, kita tidak perlu melakukan konversi secara eksplisit.
 * Namun agar aman, sebelum melakukan casts, pastikan kita melakukan type check
 * (pengecekan tipe data), dengan menggunakan kata kunci instanceof.
 * Hasil operator instanceof adalah boolean, true jika tipe data sesuai, false jika tidak sesuai.
 */

/**
 * ABSTRACT CLASS
 * Saat kita membuat class, kita bisa menjadikan sebuah class sebagai abstract class,
 * Abstract class artinya, class tersebut tidak bisa dibuat sebagai object secara lansung,
 * yang bisa dibuatkan object hanya class turunannya saja itu pun bila turunannya tidak dibuatkan abstract juga.
 * Untuk membuat sebuah class menjadi abstract, kita bisa menggunakan kata kunci abstract
 * sebelum kata kunci class
 * Sehingga abstract class bisa kita gunakan sebagai kontrak child class.
 */

/**
 * ABSTRACT FUNCTION
 * Saat kita membuat class yang abstract, kita bisa membuat abstract function juga
 * di dalam class abstract tersebut.
 * Saat kita membaut sebuah abstract function, kita tidak boleh membuat block function
 * untuk function tersebut.
 * Artinya, abstract function wajib di override di class child.
 * Abstract function tidak boleh memiliki accsess modifier private.
 */

/**
 * ENCAPSULATION
 * Encapsulation artinya memastikan data sensitif sebuah object tersembunyi dari akses luar.
 * Hal ini bertujuan agar kita bisa menjaga agar data sebuah aobject tetap baik dan valid.
 * Untuk mencapai ini, biasanya kita kaan membuat semua properties menggunakan access modifier private,
 * sehingga tidak bisa diakses atau diubah dari luar.
 * Agar bisa diubah, kita akan menyediakan function untuk mengubah dan mendapatkan properties tersebut.
 * GETTER & SETTER
 * Di PHP proses encapsulation sudah dibuat standarisasinya, dimana kita bisa menggunakan
 * getter dan setter method.
 * Getter adalah function yang dibuat untuk mengambil data field (properties).
 * Setter adalah function untuk mengubah data field (properties).
 * Tipe Data : Boolean -> Getter Method : isXxx(): bool -> Setter Method : setXxx(bool value)
 * Tipe Data : Lainnya -> Getter Method : getXxx(): tipeData -> Setter Method : setXxx(tipeData value)
 */

/**
 * INTERFACE
 * Sebelumnya kita sudah tahu bahwa abstract class bisa kita gunakan sebagai kontrak untuk class childnya.
 * Namun sebenarnya yang lebih tepat untuk kontrak adalah interface.
 * Jangan salah sangka bahwa interface disini bukanlah User Interface atau Graphical User Interface.
 * Interface yang dimaksud mirip seperti abstract class, yang membedakannya adalah di interface,
 * semua method otomatis abstract, dan tidak memiliki block.
 * Di Interface kita tidak boleh memiliki properties, kita hanya boleh miliki constant.
 * Untuk mewariskan interface, kita tidak menggunakan kata kunci extends, melainkan implements,
 * Dan berbeda dengan class, kita bisa implements lebih dari satu interface.
 * INTERFACE INHERITANCE
 * Sebelumnya kita sudah tahu kalau di PHP, child class hanya bisa punya 1 class parent.
 * Namun berbeda dengan interface, sebuah child interface bisa punya lebih dari 1 interface parent.
 * Bahkan interface pun bisa implement interface lain, bisa lebih dari 1. Jika interface ingin
 * mewarisi interface lain, kita bisa menggunakan kata kunci extends, bukan implements.
 */

/**
 * TRAIT
 * Selain class dan interface, di PHP terdapat feature lain bernama trait.
 * Trait mirip dengan abstract class, kita bisa membuat konkrit function atau abstract function.
 * Yang membedakan adalah, di trait bisa kita tambahkan ke dalam class lebih dari satu.
 * Trait mirip seperti ekstension, dimana kita bisa menambahkan konkrit function ke dalam class dengan trait.
 * Untuk menggunakan trait di class, kita bisa menggunakan kata kunci use.
 * TRAIT PROPERTIES
 * Berbeda dengan interface, di trait kita bisa menambahkan properties.
 * Dengan menambahkan properties, secara otomatis class tersebut akan memiliki properties
 * yang ada di trait.
 * TRAIT ABSTRACT FUNCTION
 * Selain konkrit function, di trait juga kita bisa menambahkan abstract function.
 * Jika terdapat abstract functio di trait, maka secara otomatis function tersebut harus
 * di override di class yang menggunakan trait tersebut.
 * TRAIT OVERRIDING
 * Jika sebuah class memiliki parent class yang memiliki function yang sama dengan function di trait,
 * maka secara otomatis trait akan meng-override function tersebut.
 * Namun jika kita membuat function yang sama di classnya,
 * maka secara otomatis kita akan meng-override function di trait.
 * Sehingga posisinya seperti ParentClass = Akan teroverride oleh -> Trait = Akan teroverride oleh -> Child Class
 * Selain melakukan override function di class, kita juga bisa melakukan
 * override visibility function yang terdapat di trait.
 * Namun untuk mealkukan ini tidak perlu membuat function baru di class,
 * kita bisa gunakan secara sederhana ketika menggunakan traitnya.
 * Misalnya kita bisa merubah function yang tadinya public menjadi private.
 * TRAIT CONFLICT
 * Jika kita menggunakan lebih dari satu trait, lalu terdapat function di trait tersebut,
 * maka hal tersebut akan menyebabkan konflik.
 * Jika terjadi konflik seperti ini, kita bisa mengatasinya dengan menggunakan kata kuncu "insteadof".
 * TRAIT INHERITANCE
 * Sebelumnya kita sudah tahu bahwa class bisa menggunakan trait lebih dari satu.
 * Lantas bagaimana dengan trait yang menggunakan trait lain?
 * Trait bisa menggunakan trait lain, mirip seperti interface yang bisa implement interface lain.
 * Untuk menggunakan trait lain dari trait, penggunaannya sama seperti dengan penggunaan
 * trait di class
 */

/**
 * FINAL CLASS
 * Kata kunci final bisa digunakan di class, dimana jika kita menggunakan kata kunci "final" sebelum class,
 * maka kita menandakan bahwa class tersebut tidak bisa diwariskan atau diturunkan lagi.
 * Secara otomatis semua class childnya akan error.
 * FINAL FUNCTION
 * Kata kunci final juga bisa digunakan di function.
 * Jika sebuah function kita tambahkan kata kunci final, maka artinya function tersebut
 * bisa di override lagi di class childnya.
 * Ini sangat cocok jika kita ingin mengunci implementasi dari sebuah method agar
 * tidak bisa diubah lagi oleh class childnya.
 */

/**
 * ANONYMOUS CLASS
 * Anonymous class atau class tanpa nama adalah kemampuan mendeklarasikan class,
 * sekaligus meng-instansiasi object-ya secara langsung.
 * Anonymous class sangat cocok ketika kita berhadapatan dengan kasus membuat implementasi interface
 * atau abstract class sederhana, tanpa harus membuat implementasi classnya.
 * CONSTRUCTOR ANONYMOUS CLASS
 * Anonymous class juga mendukun constructor, jadi kita bisa menambahkan constructor jika kita mau.
 */

/**
 * STATIC KEYWORD
 * Kata kunci static adalah keyword yang bisa kita gunakan untuk membuat properties
 * atau function, di class dapat diakses secara langsung tanpa menginstansiasi class terlebih dahulu.
 * Namun ingat, saat kita buat static properties atau funciton, secara otomatis hal itu tidak akan
 * berhubungan lagi dengan class instance yang kita buat, dan tidak menempel pada objectnya.
 * Untuk cara mengakses static properties atau function sama seperti mengakses constant,
 * kita bisa menggunakan operator ::
 * static function tidak bisa mengakses function biasa, akrena function biasa menempel pada class instance
 * sedangkan static function tidak.
 * Jadi static function hanya bisa mengakses properties static, atau konstant, atau static function yang lain.
 * Biasanya penggunaan static function atau static properties biasanya digunakan untuk class Helper atau Utility.
 */

/**
 * STDCLASS
 * stdClass adalah class kosong bawaan dari PHP, biasanya digunakan ketika konversi dari
 * tipe lain menjadi tipe object. stdClass sangat berguna ketika kita ingin melakukan konversi
 * dari tipe data array ke object secara otomatis.
 */

/**
 * OBJECT ITERATION
 * Saat kita membuat object dari sebuah class, kita bisa melakukan iterasi ke semua
 * properties yang terdapat di object tersebut menggunakan foreach.
 * foreach untuk object yang diambil keynya adalah propertinya, dan valuenya adalah value dari propertinya
 * Hal ini mempermudah kita saat ingin mengakses semua properties yang ada di object.
 * Secara default, hanya properties yang public yang bisa diakses oleh foreach.
 */

/**
 * ITERATOR
 * Sebelumnya kita melakukan iterasi data di properties secara otomatis menggunakan foreach.
 * Jika kita ingin menangani hal ini secara manual, kita bisa menggunakan iteraotr.
 * Itarator ini adalah interface yang digunakan untuk melakukan iterasi, namun membuat iterator
 * secara manual lumayan sulit, oleh karena itu sekarang kita akan gunakan ArrayIterator,
 * yaitu iterator yang menggunakan array sebagai data iterasinya.
 * Dan agar class kita bisa di iterasi secara manual, kita bisa menggunakan interface IteratorAggregate.
 * disana kita hanya butuh meng-override function getIterator() yang mengembalikan data iterator.
 */

/**
 * GENERATOR
 * Sebelumnya kita tahu bahwa untuk membuat object yang bisa di iterasi, kita menggunakan iterator
 * namun pembuatan Iterator secara manual sangatlah ribet.
 * Untungnya di PHP, terdapat fitur generator, yang bisa kita gunakan untuk membuat Iterator
 * secara otomatis hanya dengan menggunakan kata kunci "yield".
 */

/**
 * OBJECT CLONING
 * Kadang kita ada kebutuhan untuk menduplikasi sebuah object.
 * Biasanya untuk melakukan hal ini, kita bisa membuat object baru, lalu menyalin semua
 * properties di object awal ke object baru.
 * Dengan object cloning kita bisa menggunakan perintah clone untuk membuat duplikasi object
 * Secara otomatis semua properties di object awal akan di duplikasi ke object baru.
 * Perlu diingat semua properties visibility atau access modifier semua itu dapat di cloning.
 * __clone() Function
 * Kadang menyalin semua properties bukanlah yang kita inginkan
 * Misal saja kita hanya ingin menyalin beberapa properties saja, tidak ingin semuanya.
 * Jika kita ingin memodifikasinya, kita bisa membuat function di dalam classnya dengan
 * nama function __clone()
 * Function __clone() akan dipanggil di object hasil duplikasi setelah proses duplikasi selesai.
 * Jadi jika kita ingin menghapus beberapa properties, bisa kita lakukan di function __clone()
 */

/**
 * COMPARING OBJECT
 * Sama seperti tipe data yang lain, untuk membandingkan dua buah object,
 * kita bisa menggunakan operator == (equals) dan === (identity)
 * Operator == (equals) membandingkan semua properties yang terdapat di object tersebut,
 * dan tiap properties juga akan dibandingkan menggunakan operator == (equals)
 * Sedangkan operator === (identity), maka akan membandingkan apakah object identik,
 * artinya mengacu ke object yang sama.
 */

/**
 * MAGIC FUNCTION
 * Magic function adalah function - function yang sudah ditentukan kegunaannya di PHP
 * Kita tidak bisa membuat function tersebut, kecuali memang sudah ditentukan kegunaannya
 * Sebelumnya kita sudah membahas beberapa magic function, seperti __construct() sebagai pembuatan constructor,
 * __destruct() sebagai pembuatan destructor, dan __clone() sebagai object cloning.
 * Masih banyak magic function lainnya, kita bisa melihatnya di link berikut :
 * https://www.php.net/manual/en/language.oop5.magic.php
 * __toString() Function
 * __toString() function merupakan salah satu magic function yang digunakan sebagai representasi string sebuah object
 * Jika misal kita ingin membuat string dari object kita, kita bisa membuat function __toString()
 * __invoke() Function
 * __invoke() merupakan function yang dieksekusi ketika object yang kita buat dianggap sebagai function
 * Misal ketika kita membuat object $student, lalu kita melakukan $student(), maka secara otomatis
 * function __invoke() yang akan dieksekusi
 * __debugInfo() Function
 * Sebelumnya kita sering melakukan debug variable menggunakan function var_dump()
 * function var_dump() sebenarnya memanggil function __debugInfo()
 * Jika kita ingin mengubah isi dari debug info, kita bisa membuat function __debugInfo()
 */

/**
 * OVERLOADING
 * Overloading adalah kemampuan secara dinamis dalam membuat properties dan function
 * Ini mirip meta programming di bahasa pemrograman lain seperti Ruby
 * Namun ini berbeda dengan function overloading di bahasa pemrograman seperti Java yang membuat function yang sama,
 * berbeda dengan overloading di PHP yang erat kaitannya dengan magic function yang sebelumnya sudah kita bahas.
 * PROPERTIES OVERLOADING
 * Saat kita mengakses properties, maka secara otomatis properties akan diakses
 * Namun jika ternyata properties tersebut tidak tersedia di objectnya, maka PHP tidak secara otomatis menjadikan error.
 * PHP akan melakukan fallback ke magic function terlebih dahulu dengan demikian kita bisa membuat properties secara
 * dinamis dengan memanfaatkan magic funciton tersebu.
 * Ada beberapa magic function yang bisa kita guakan untuk properties overloading.
 * Magic Function pada Properties Overloading
 * __set($name, $value): void -> Dieksekusi ketika mengubah properties yang tidak tersedia.
 * __get($name): mixed -> Dieksekusi ketika mengakses properties yang tidak tersedia.
 * __isset($name): bool -> Dieksekusi ketika mengecek isset() atau empty() properties yang tidak tersedia.
 * __unset($name): void -> Dieksekusi ketika menggunakan unset() properties yang tidak tersedia.
 * FUNCTION OVERLOADING
 * Saat kita mengakses function, maka secara otomatis function akan diakses.
 * Namun jika ternyata function tersebut tidak tersedia di objectnya, maka PHP tidak secara otomatis menjadikan error.
 * PHP akan melakukan fallback ke magic function.
 * Dengan demikian kita bisa membuat function secara dinamis dengan memanfaatkan magic function tersebut.
 * Ada beberapa magic function yang bisa kita gunakan untuk function overloading.
 * __call ($name, $arguments): mixed -> Dieksekusi ketika memanggil function yang tidak tersedia.
 * static __callStatic($name, $arguments): mixed -> Dieksekusi ketika memanggil static function yang tidak tersedia.
 */

/**
 * COVARIANCE
 * Saat kita meng-override function dari parent class, biasanya di child class kita akan membuat function
 * yang sama dengan function yang di parent.
 * Covariance memungkinkan kita meng-override return function yang di parent dengan
 * return value yang lebih spesifik.
 * CONTRAVARIANCE
 * Sedangkan contravariance adalah memperbolehkan sebuah child class untuk membuat function
 * argument yang lebih tidak spesifik.
 */

/**
 * DATETIME
 * Biasanya dalam bahasa pemrograman sudah disediakan cara untuk memanipulasi data waktu termasuk di PHP.
 * Di PHP, kita bisa menggunakan class DateTime untuk memanipulasi data waktu.
 * Ada banyak sekali function di class DateTime yang bisa kita gunakan untuk memanipulasi data waktu.
 * DateTime Function
 * setTime($hour, $minute, $second) -> mengubah waktu DateTime
 * setDate($year, $month, $day) -> mengubah tanggal DateTime
 * setTimestamp($unixTimestamp) -> mengubah unix timestamp DateTime
 * DATEINTERVAL
 * Kadang kita hanya ingin memanipulasi waktu dan tanggal sebagian saja,
 * misal hanya menambah 1 tahun, atau mengurai beberapa hari.
 * Hal ini bisa dilakukan dengan function add milik DateTime
 * Namun function add tersebut menerima parameter berupa DateInterval
 * Saat menggunakan DateInterval duration, kita perlu menentukan
 * berapa banyak kita menambah interval.
 * Kita bisa lihat detailnya disini : https://www.php.net/manual/en/dateinterval.construct.php
 * Untuk pembuatan duration, harus diawali dengan karakter P yang artinya period.
 * DATETIMEZONE
 * Saat kita membuat object DateTime, dia akan secara otomatis membuat waktu saat ini sesuai dengan
 * timezone yang di setting di konfigurasi date.timezone di file php.ini
 * Atau kita bisa menggunakan function setTimeZone untuk mengubah timezone Date TIme.
 */

/**
 * EXCEPTION
 * Saat kita membuat aplikasi kita tidak akan terhindar dengan yang namanya error.
 * Di PHP error direpresentasikan dengan istilah exception, dan semua direpresentasikan dalam bentuk class exception.
 * Kita bisa menggunakan class exception sendiri atau menggunakan yang sudah disediakan oleh PHP.
 * Jika kita ingin membuat exception, maka kita harus membuat class yang implement interface
 * Throwable atau turunan - turunannya.
 * MEMBUAT EXCEPTION
 * Exception biasanya terjadi di function, saat kita memanggil function yang terjadi error.
 * Di dalam kode program kita, untuk membuat exception kita cukup menggunakan kata kunci throw,
 * diikuti dengan object exceptionnya.
 * TRY CATCH
 * Saat kita memanggil sebuah function yang bisa menyebabkan excaption, maka kita disarankan
 * menggunakan try-catch expression di PHP.
 * Ini gunanya agar kita bisa menangkap exception yang terjadi, karena jika tidak ditangkap,
 * lalu terjadi exception, maka secara otomatis program kita akan berhenti.
 * Cara menggunakan try-catch expression di PHP sangat mudah, di block try kita tinggal panggil
 * method yang bisa menyebabkan exception, dan di block catch, kita bisa melalkukan sesuatu jika
 * terjadi exception.
 * FINAL KEYWORD
 * Dalam try-catch kita bisa menambahkan block finally
 * Black finally ini adalah block dimana akan selalu dieksekusi baik terjadi exception ataupun tidak
 * ini sangat cocok ketika kita ingin melakukan sesuatu, tidak peduli sukses ataupun gagal,
 * misal di block try kita ingin membaca file, di block catch kita akan tangkap jika terjadi error,
 * dan di block finally error ataupun sukses membaca file, kita wajib menutup koneksi ke file tersebut,
 * biar tidak menggantung di memory.
 * DEBUG EXCEPTION
 * Exception di PHP memiliki sebuah function bernama getTrace()
 * Function getTrace() berisikan informasi dari exception yang terjadi, seperti lokasi file,
 * baris ke berapa, function yang mana sampai argumenty yang dikirim di function tersebut apa.
 * Ini sangat cocok untuk kita jika ingin mendebug ketika terjadi exception (error).
 */