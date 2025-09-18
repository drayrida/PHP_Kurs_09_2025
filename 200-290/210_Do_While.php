<?php

// while

// Kopfgesteuerte Schleife

$i =1;
while ($i <= 10)
    {
        echo $i . ' ';
        $i++;

    }
echo '<br>';

// die Stärke von while:
// Dei Anzahl der Durchläufe ist nicht bekannt.
// Solange keine 6 gewürfelt wird, gib ein "Bäh!" aus.

while(rand(1,6) != 6)
{
    echo 'Bäh!';
}
echo '<br>';
// do while
// Fußgesteuerte Schleife
// Läuft mindestens einmal durch

do{
    $wurf = rand(1,6);
    echo $wurf;
}
while ($wurf == 6);
echo '<br>';



$wurf = rand(1,6);
echo $wurf. ' ';
while ($wurf != 6)
{
    $wurf = rand(1,6);
    echo $wurf. ' ';
}

