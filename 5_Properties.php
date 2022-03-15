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
    MANIPULASI PROPERTIES

    - Fields yang ada di object, bisa kita manipulasi
    - Untuk manipulasi data field, sama seperti cara pada variabel
    - Untuk mengakses field, kita butuh kata kunci ->(tanda panah) setelah nama object
    dan diikuti nama fields nya

*/

require_once "3_Person.php";

$person = new Person();

// untuk mengubah data properties
$person->name = "Doni";
$person->address = "Jakarta";
// $person->country = "Indonesia"; jika country tidak di set data nya,
//maka akan default di properties class

var_dump($person);

echo "Name : $person->name" . PHP_EOL;
echo "Addres : $person->address" . PHP_EOL;
echo "Country : $person->country" . PHP_EOL . PHP_EOL;

// ketika membuat object, contoh person2
// bisa membuat data nama, alamat dll dengan data lain

$person2 = new Person();

$person2->name = "Budi";
$person2->address = "Bandung";
// $person2->country = "Indonesia"; -> jika country tidak di set data nya, 
//maka akan default di properties class

var_dump($person2);



/*
    PROPERTIES TYPE DECLARATION

    - Sama seperti function, di properties pun, kita bisa membuat type declaration
    - Ini membuat PHP otomatis mengecek tipe data yang sesuai dengan type declaration yg telah ditentukan
    - Jika kita mencoba mengubah properties dengan type yang berbeda, maka otomatis akan error
    - Ingat, bahwa PHP memiliki fitur type juggling, yang secara otomatis bisa mengkonversi ke tipe data lain
    - Untuk menambahkan type declaration, kita bisa tambahkan setelah kata kunci var di properties
*/

// error
// $person2 = [];


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





