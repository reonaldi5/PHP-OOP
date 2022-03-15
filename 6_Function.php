<?php

/*
    FUNCTION

    - Selain menambahkan properties, kita juga bisa menambahkan function ke object
    - Cara dengan mendeklarasikan function tersebut di dalam block class
    - Sama seperti function biasanya, kita juga bisa menambahkan return value dan parameter
    - Untuk mengakses function tersebut, kita bisa menggunakan tanda -> dan diikuti dengan nama method nya.
    sama seperti properties.
*/

require_once "3_Person.php";

$person = new Person();

$person->sayHello("Budi");