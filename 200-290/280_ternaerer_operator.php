<?php

// Ternärer Operator
// Bedingung ? True-case : False-case

// Operator mit drei Operanden
// Der Operator hat selber die Zeichen ? und :
// und drumherum sind die drei Operanden.

echo (2 > 1) ? 'Stimmt' : 'Stimmt nicht';

// Der Ternäre Operator ist eine Kurzform vom If/else

if (2 > 1){
    echo 'Stimmt';   // Stimmt
}else{
    echo 'Stimmt nicht';
}

// Beispiel mit Zuweisung
$ausgabe = (2 > 3 ) ? 'Stimmt' : 'Stimmt nicht';
echo $ausgabe;  // Stimmt nicht

//Beispiel Plural in der Ausgabe
$anzahl = rand(1,2);
echo ($anzahl == 1) ? 'Mensch' : 'Tier';