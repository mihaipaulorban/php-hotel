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

           <!-- Form per i filtri -->
           <form action="" method="get" class="mb-4">
            <div class="row g-3 align-items-center justify-content-center">

            <!-- Checkbox per parcheggio -->
                <div class="col-auto">
                    <label for="parking" class="col-form-label text-white">Solo con parcheggio:</label>
                </div>
                <div class="col-auto">
                    <input type="checkbox" id="parking" name="parking" value="yes" class="form-check-input" <?php echo isset($_GET['parking']) ? 'checked' : ''; ?>>
                </div>

            <!-- Scelta epr voto minimo -->
                <div class="col-auto">
                    <label for="vote" class="col-form-label text-white">Voto minimo:</label>
                </div>
                <div class="col-auto">
                    <select id="vote" name="vote" class="form-select">
                        <option value="">Scegli...</option>
                        <option value="1" <?php echo (isset($_GET['vote']) && $_GET['vote'] == '1') ? 'selected' : ''; ?>>1</option>
                        <option value="2" <?php echo (isset($_GET['vote']) && $_GET['vote'] == '2') ? 'selected' : ''; ?>>2</option>
                        <option value="3" <?php echo (isset($_GET['vote']) && $_GET['vote'] == '3') ? 'selected' : ''; ?>>3</option>
                        <option value="4" <?php echo (isset($_GET['vote']) && $_GET['vote'] == '4') ? 'selected' : ''; ?>>4</option>
                        <option value="5" <?php echo (isset($_GET['vote']) && $_GET['vote'] == '5') ? 'selected' : ''; ?>>5</option>
                    </select>
                </div>

                <!-- Pulsante Submit -->
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary">Filtra</button>
                </div>
            </div>
        </form>

        <table class="table table-hover">
            <thead class="text-white">
                <tr>
                    <th>Nome</th>
                    <th>Descrizione</th>
                    <th>Parcheggio</th>
                    <th>Voto</th>
                    <th>Distanza dal centro</th>
                </tr>
            </thead>
            <tbody class="text-white">
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
                $filteredHotels = $hotels;

                // Filtro per parcheggio
                if (isset($_GET['parking'])) {
                    $filteredHotels = array_filter($filteredHotels, function ($hotel) {
                        return $hotel['parking'];
                    });
                }

                // Filtro per voto
                if (isset($_GET['vote']) && $_GET['vote'] !== '') {
                    $vote = $_GET['vote'];
                    $filteredHotels = array_filter($filteredHotels, function ($hotel) use ($vote) {
                        return $hotel['vote'] >= $vote;
                    });
                }


                // Iterazione degli Hotel
                foreach ($filteredHotels as $hotel) {
                    echo "<tr>";
                    echo "<td>" . $hotel['name'] . "</td>";
                    echo "<td>" . $hotel['description'] . "</td>";
                    echo "<td>" . ($hotel['parking'] ? 'Sì' : 'No') . "</td>";
                    echo "<td>" . $hotel['vote'] . "</td>";
                    echo "<td>" . $hotel['distance_to_center'] . " km</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div> 
</body>
</html>


