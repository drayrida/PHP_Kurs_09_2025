<?php

// Methode der Formular-Überlieferung

// Bei GET werden die Inhalte der URL übergeben
var_dump($_GET);

// Bei der Methode POST werden die Inhalte im Hintergrund überliefert.
var_dump($_POST)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HTML-FOrmular</title>
</head>
<body>
<h1>HTML-Formular</h1>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">

    Vorname:<input type="text">
    <input type="submit" value="abschicken">

</form>

</body>
</html>