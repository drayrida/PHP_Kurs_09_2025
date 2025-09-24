<?php

// Variablenbezeichner

// Am Anfang muss in PHP das Dollar-Zeichen stehen.

// Danach sind Buchstaben, Ziffern und der Unterstrich erlaubt.
// Einschränkung: Direkt nach dem Dollar-Zeichen keine Ziffer.

$_hallo = 1; // unerlaubte Sonderzeichen
$lowerCamelCase =2; // Programmierrichtlinie

$HELLO = 3; // Funktioniert
// PHP ist (wie alle Programmiersprachen) case-sensitive.
# echo $hello; // Warning: Undefined variable $hello
// Geht nicht:
//Ziffer darf nicht am Anfang stehen:
# $zahl1 = 11;  // Parse error: syntax error, unexpected in "1":

// keine unerlaubten Sonderzeichen:
// $meine-variable = 12; // Parse error: syntax error...
