<?php
// Einen neuen Film in die Datenbank eintragen
// HTML Formular & INSERT INTO per PDO

var_dump($_POST);
/*
INSERT INTO filme (titel, jahr, vertrieb, fsk, einspielergebnis,laenge) VALUES
('The Accountant', 2016, 'Action', 'Warner Bros', 16, 155.6, 128);
*/
$sql="INSERT INTO filme (titel, jahr, vertrieb, fsk, einspielergebnis,laenge) VALUES
('The Accountant', 2016, 'Action', 'Warner Bros', 16, 155.6, 128);";

$stmt = $db->prepare($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Mein erster Header</h1>

<p> Paragraph und am Ende Zeilenumbruch</p>

</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Mein erster Header</h1>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">

    Titel:<input type="text" name="titel" value="The Accountant"><br>
    Jahr:<input type="jahr" name="jahr" value="2016"><br>
    Genre:<input type="genre" name="genre" value="Thriller"><br>
    Vertrieb:<input type="text" name="vertrieb" value="Warner Bros"><br>
    FSK:<input type="text" name="fsk" value="16"><br>
    Einspielergebnis:<input type="text" name="einspielergebnis" value="155.6"><br>
    Länge:<input type="text" name="laenge" value="128"><br>

    <input type="submit" value="abschicken">

</form>
<p> Paragraph und am Ende Zeilenumbruch</p>

</body>
</html>