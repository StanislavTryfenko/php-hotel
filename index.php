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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
    <script src="https://kit.fontawesome.com/4c899c3a4a.js" crossorigin="anonymous"></script>
</head>

<body>

    <div class="container mt-5">
        <form action="" method="get" class="mb-5">
            <label for="parking_filter">Spunta per visualizzare solo hotel con parcheggi</label>
            <input type="checkbox" name="parking_filter">
            <br>
            <button type="submit">Invia</button>
        </form>
        <table class="table col-4">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Voto</th>
                    <th scope="col">Distanza</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($hotels as $i => $hotel) {
                    if ($park_filter && $hotel['parking']) {
                        echo '<tr>';
                        echo '<th scope="row">' . $i . '</th>';
                        echo '<td>' . $hotel['name'] . '</td>';
                        echo '<td>' . $hotel['vote'] . '</td>';
                        echo '<td>' . $hotel['distance_to_center'] . '</td>';
                        echo '</tr>';
                    } elseif (!$park_filter) {
                        echo '<tr>';
                        echo '<th scope="row">' . $i . '</th>';
                        echo '<td>' . $hotel['name'] . '</td>';
                        echo '<td>' . $hotel['vote'] . '</td>';
                        echo '<td>' . $hotel['distance_to_center'] . '</td>';
                        echo '</tr>';
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>