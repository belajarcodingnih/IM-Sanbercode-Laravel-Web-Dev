<?php
class Frog extends Animal{
    public function __construct($name) {
        parent::__construct($name); // Memanggil konstruktor kelas induk (Animal)
    }

    public function jump($lompat) {
        return "jump : $lompat <br>"; // Menampilkan aksi melompat
    }
}


?>