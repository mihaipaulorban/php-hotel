<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS  -->
    <link rel="stylesheet" href="style.css">
     <!-- Bootstrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>PHP Hotel</title>
</head>
<body>
    <h1>Lista di Hotel</h1>
<?php
// Array degli hotel
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

// Iterazione degli Hotel
        foreach ($hotels as $hotel) {
            echo "<div class='hotel-item mb-3'>";
            echo "<div class='hotel-name'>" . $hotel['name'] . "</div>";
            echo "<div class='hotel-label'>Descrizione:</div><div class='hotel-info'>" . $hotel['description'] . "</div>";
            echo "<div class='hotel-label'>Parcheggio:</div><div class='hotel-info'>" . ($hotel['parking'] ? 'Sì' : 'No') . "</div>";
            echo "<div class='hotel-label'>Voto:</div><div class='hotel-info'>" . $hotel['vote'] . "</div>";
            echo "<div class='hotel-label'>Distanza dal centro:</div><div class='hotel-info'>" . $hotel['distance_to_center'] . " km</div>";
            echo "</div>";
        }
?>
</body>
</html>