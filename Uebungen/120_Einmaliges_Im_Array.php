<?php

/*
 * Einmaliges im Array
 *
 * Schreibe ein Programm, das ein Array mit neun Zahlen befüllt.
 * Dabei sollen vier Zahlen doppelt vorkommen
 * und eine Zahl nur einmal.
 *
 * Schreibe dann ein Programm, das aus diesem Array die Zahl findet,
 * die nur einmal vorkommt.
 */

// vier doppelten und eine einmalige Zahl
$filledarray = [1, 3, 6, 1, 3, 6, 9, 2, 2];

// Häufigkeit jeder Zahl
$haeufigkeiten = array_count_values($filledarray);

foreach ($haeufigkeiten as $zahl => $anzahl) {
   
    if ($anzahl === 1) {
        echo 'Das ist die einmalige Zahl: ' . $zahl.'<br>';
        break;
    }
}
echo 'Das waren die Zahlen im gesamten: ';
foreach ($filledarray as $a)
{
    echo $a.' ';
}
?>