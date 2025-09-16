<?php

# Datentypen

// Zeichenkette
print gettype('Hello'); // String
print '<br>';

// Ganzzahl
print gettype(1234567); //Integar
print '<br>';

// Fließkommazahl
print gettype(123.456); //Double
print '<br>';

// Unterstrich als Tausender trenner
print 123.456_789_111; //123.456789111
print '<br>';
print 100_000_000; // für die lesbarkeit beim coden nicht preview
print '<br>';

// Wahrheitswert
print gettype(true); // boolean
print '<br>';

// Identisch-Operator
print 123 == '123'; //1 = TRUE
print '<br>';
var_dump( 123 == '123'); //bool(true)
print '<br>';
var_dump(123 === '123'); //bool(false) (Wert und Datentyp)

