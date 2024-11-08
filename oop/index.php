<?php
require_once 'Animal.php';
require_once 'Frog.php';
require_once 'Ape.php';

$sheep = new Animal("sheep");

echo "name : " . $sheep->name . "<br>";
echo "legs : " . $sheep->legs . "<br>"; 
echo "cold blooded : " . $sheep->cold_blooded . "<br>" ;

$kodok = new Frog("buduk");

echo "name : " . $kodok->name . "<br>";
echo "legs : " . $sheep->legs . "<br>"; 
echo "cold blooded : " . $sheep->cold_blooded . "<br>" ; 
echo $kodok->jump("hop hop");


$sungokong = new Ape("Kera Sakti");

echo "name : " . $sungokong->name . "<br>";
echo "legs : " . $sheep->legs . "<br>"; 
echo "cold blooded : " . $sheep->cold_blooded . "<br>" ; 
echo $sungkong->yell("Auoo");

?>