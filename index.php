<?php

$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];

$park_filter = $_GET['parking_filter'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotels</title>
</head>

<body>

    <form action="" method="get">
        <label for="parking_filter">Spunta per visualizzare solo hotel con parcheggi</label>
        <input type="checkbox" name="parking_filter">
        <button type="submit">Invia</button>
    </form>

    <?php
    foreach ($hotels as $hotel) {
        if ($park_filter && $hotel['parking']) {
            echo $hotel['name'] . ' ' . $hotel['vote'] . ' ' . $hotel['distance_to_center'] . '<br>';
        } elseif (!$park_filter) {
            echo $hotel['name'] . ' ' . $hotel['vote'] . ' ' . $hotel['distance_to_center'] . '<br>';
        }
    }
    ?>

</body>

</html>