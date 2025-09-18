<?php
/*
 * Teilbar
 *
 * Schreibe ein Skript, das alle Zahlen von 1 bis 100 ausgibt,
 * die durch drei teilbar sind.
 * Hilfsmittel: Schleife, if, Modulo
 *
 * Zusatz 1: Gib die Anzahl der Zahlen aus
 *
 * Zusatz 2: Das Programm soll nun alle Zahlen ausgeben,
 *           die durch 3 ODER 7 teilbar sind.
 */
$zahl = 0;
echo "Zahlen die durch 3 und 7 teilbar sind:<br>";

for ($i =1; $i <= 100;$i++){
    if ($i % 3 == 0 || $i %7 == 0){
        echo $i. " ";
        $zahl++;
    }
}

echo "<br>Anzahl der Zahlen:" . $zahl;
?>
