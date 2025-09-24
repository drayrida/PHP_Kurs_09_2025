<?php
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
];
$db = new PDO('mysql:host=localhost;dbname=filmverwaltung', 'root', "", $options);
require_once 'lib/db_verbindung.php';

// A mapping array to handle column reordering, renaming, and hiding
$column_config = [
    'titel' => 'Titel',
    'genre' => 'Genre',
    'laenge' => 'Länge', // Changed to "Länge" for display
    'veroeffentlichung' => 'Veröffentlichung',
    'regie' => 'Regie',
    'hauptdarsteller' => 'Hauptdarsteller',
    'fsk' => 'FSK', // Will be uppercase
    'einspielergebnis' => 'Einspielergebnis'
];

$stmt = $db->query('SELECT * FROM filme ORDER BY titel ASC;');
$filme = $stmt->fetchAll();

// 1. Process the headings
$headings = array_values($column_config); // Get only the display names

// 2. Process each film to match the desired output format
foreach ($filme as $key => $film) {
    // Create a new array with the desired columns and order
    $processed_film = [];
    foreach ($column_config as $db_key => $display_name) {
        if (isset($film[$db_key])) {
            $processed_film[$db_key] = $film[$db_key];
        }
    }

    // Assign the processed array back to the main array
    $filme[$key] = $processed_film;
}

?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Filme anzeigen</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Filme anzeigen</h1>

<table>
    <tr>
        <?php foreach ($headings as $heading) { ?>
            <th>
                <?php echo htmlspecialchars($heading); ?>
            </th>
        <?php } ?>
    </tr>

    <?php foreach ($filme as $film) { ?>
        <tr onclick="location.href='film_anzeigen.php?id=<?php echo urlencode($film['id']); ?>'">
            <?php foreach ($film as $key => $f) { ?>
                <td>
                    <?php
                    // Special formatting for specific columns
                    if ($key == 'fsk') {
                        echo strtoupper(htmlspecialchars($f));
                    } elseif ($key == 'einspielergebnis') {
                        echo number_format($f * 1000000, 0, ',', '.');
                    } else {
                        echo htmlspecialchars($f);
                    }
                    ?>
                </td>
            <?php } ?>
        </tr>
    <?php } ?>
</table>

</body>
</html>
