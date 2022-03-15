<?php

/*
    PROPERTIES

    - Fields/Properties/Attributes adalah data yang bisa kita sisipkan di dalam Object
    - Namun sebelum kita bisa memasukkan data di fields,
    kita harus mendeklarasikan data apa saja yang dimiliki object tersebut di dalam deklrasi class-nya
    - Membuat field sama seperti membuat variable, 
    namun ditempatkan di block class, namun diawali dengan kata kunci var
*/

/*
    PROPERTIES TYPE DECLARATION

    - Sama seperti function, di properties pun, kita bisa membuat type declaration
    - Ini membuat PHP otomatis mengecek tipe data yang sesuai dengan type declaration yg telah ditentukan
    - Jika kita mencoba mengubah properties dengan type yang berbeda, maka otomatis akan error
    - Ingat, bahwa PHP memiliki fitur type juggling, yang secara otomatis bisa mengkonversi ke tipe data lain
    - Untuk menambahkan type declaration, kita bisa tambahkan setelah kata kunci var di properties
*/

/*
    DEFAULT PROPERTIES VALUE

    - Sama seperti variable, di properties juga kita bisa langsung mengisi value nya
    - Ini mirip seperti default value, jadi jika tidak diubah di object,
    maka properties akan memiliki value tersebut
*/


/*
    NULLABLE PROPERTIES

    - Saat kita menambah type declaration di properties atau di function argument,
    maka secara otomatis kita tidak bisa mengirim null ke dalam properties atau function argument tersebut

    - Di PHP 7.4 dikenalkan nullable type , jadi kita bisa mengirim data null ke properties atau function arguments
    - Caranya sebelum type declaration nya, kita bisa tambahkan tanda ?
*/

/*
    FUNCTION

    - Selain menambahkan properties, kita juga bisa menambahkan function ke object
    - Cara dengan mendeklarasikan function tersebut di dalam block class
    - Sama seperti function biasanya, kita juga bisa menambahkan return value dan parameter
    - Untuk mengakses function tersebut, kita bisa menggunakan tanda -> dan diikuti dengan nama method nya.
    sama seperti properties.
*/

class Person 
{
    // dibawah adalah properties
   var string $name; // -> terdapat properties type declaration yaitu string
   var ?string $address = null; // -> terdapat properties type declaration yaitu string
    // di properties $address terdapat nullable, yaitu ditandai dengan ?(tanda tanya)
    // jika tidak memakai nullable, maka object dr properties tersebut tidak boleh null
    // lalu default value nya adalah null,
    
   var string $country = "Indonesia"; // -> terdapat properties type declaration yaitu string
   // terdapat juga default value pada properties $country, yaitu "Indonesia"


   function sayHello(string $name)
   {
       echo "Hello $name " . PHP_EOL;
   }
}