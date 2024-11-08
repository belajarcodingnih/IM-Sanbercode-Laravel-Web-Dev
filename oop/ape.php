<?php
class Ape extends Animal{
    public function __construct($name) {
        parent::__construct($name); // Memanggil konstruktor kelas induk (Animal)
    }

    public function yell($sungkong) {
        return "Yell :  $sungkong <br>"; // Menampilkan aksi melompat
    }
}


?>