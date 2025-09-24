<?php
// PDO - PHP Data Objects

$db = new PDO('mysql:host=localhost;dbname=mysql' , 'root' , "");
var_dump($db); // class PDO#1 (0) {}

// new erzeugt ein neues Objekt der klasse PDO.
//
// Wie in Java/Python auch wird in PHP eine Klasse mit dem Schlüsselwort class definiert.
// Und ein neues Objekt der Klasse mit dem Schlüsselwort "new" erzeugt

class Fahrzeug{}
$car1 = new Fahrzeug();
var_dump($car1);   // class Fahrzeug#2 (0) {}