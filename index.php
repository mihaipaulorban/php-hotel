<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Bootstrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
         <!-- CSS  -->
    <link rel="stylesheet" href="style.css">
    <title>PHP Hotel</title>
</head>
<body> 
    <div class="container mt-5">
        <h1 class="text-center mb-4 text-white">Lista di Hotel</h1>
        <div class="row">
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
                echo "<div class='col-sm-6 col-lg-4 mb-4'>"; 
                echo "<div class='card h-100'>"; 
                echo "<div class='card-body'>";
                echo "<h3 class='card-title text-white'>" . $hotel['name'] . "</h3>"; 
                echo "<p class='card-text text-white'><strong>Descrizione:</strong> " . $hotel['description'] . "</p>";
                echo "<p class='card-text text-white'><strong>Parcheggio:</strong> " . ($hotel['parking'] ? 'Sì' : 'No') . "</p>";
                echo "<p class='card-text text-white'><strong>Voto:</strong> " . $hotel['vote'] . "</p>";
                echo "<p class='card-text text-white'><strong>Distanza dal centro:</strong> " . $hotel['distance_to_center'] . " km</p>";
                echo "</div>"; 
                echo "</div>"; 
                echo "</div>"; 
            }
            ?>
        </div> 
    </div> 
</body>
</html>

