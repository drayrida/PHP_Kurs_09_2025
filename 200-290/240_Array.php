<?php

// Arrays
// Numerisches Array in Python die Liste)

$leute = ['Peter', 'Paul', 'Parker'];

// echo $leute; // Array & WARNING


// var dump()Zur Information beim Programmieren:
//
var_dump($leute);

echo $leute[0] . "\n"; // Index 0 = Peter
echo $leute[1] . "\n"; // Index 1 = Paul
echo $leute[2] . "\n"; // Index 2 = Parker

// Assoziative Array (in Python das Dictionary)

// Schlüssel/Key - Wert/Value - Paare
$person = [
    'vorname' => 'Peter',
    'nachname' => 'Wellert',
    'alter' => 39
];
var_dump($person);

echo $person['vorname'] . "\n";
echo $person['nachname'] . "\n";
echo $person['alter'] . "\n";

// count()
// Gibt die Anzahl der
echo count ($leute) . "\n";
echo count($person) . "\n";

//foreach- Schleife (speziell für Arrays)

foreach ($leute as $leut){
    echo 'Hallo ' . $leut . "\n";
}
echo "\n";

foreach ($person as $p => $q)
{
    echo $q . ': ' . $p . "\n";
}



// Doppelpfeil beim nummerischen Array ist der seltenere Fall:
// wird beim Erzeugen nicht benötigt.
$menschen= ['Peter', 'Paul', 'Parker'];

//Kann beim Auslesen verwendet werden:
foreach ($menschen as $m => $k) // $s für Schlüssel, $w für Wert.
{
    echo $m . ': ' . $k . "\n";
}

for($i=0; $i<count($menschen); $i++)
{
    echo ($i+1) .'. ' . $menschen[$i] . "\n";

}

// Assoziatives Array ohne Doppelpfeil ist der seltenere Fall
$person = [
    'vorname' => 'Peter',
    'nachname' => 'Wellert',
    'alter' => 39
];
foreach ($person as $p)
{
    echo $p. "\n";
}