<?php
/*
* Würfeln
*
* Würfel eine Zahl (von 1 bis 6) und gib aus,
* was gewürfelt wurde:
* Super, eine 6!
* Immerhin noch eine 5!
* Das reicht nicht! (bei 1-4)
*
* Hilfsmittel: rand(), Verzweigung
*/

$zahl= rand(1,6);
print"Du hast die Zahl: $zahl gewürfelt.";
print"\n<br>";

if ($zahl == 6)
{
    print'Super eine 6';
}
elseif ($zahl == 5)
{
    print'Immerhin noch eine 5';
}
elseif ($zahl==1 || $zahl ==2 || $zahl ==3 || $zahl ==4)
{
    print'Das reicht nicht';
}
else
{
    print'Ungültige Zahl';
}

