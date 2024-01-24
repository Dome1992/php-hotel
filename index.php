<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- CND BOOTSTRAP -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>



<div class="row justify-content-center">
    

    <div class="col-8">
        <h1>Elenco Hotel</h1>

        <table class="table">
        <thead class="thead-dark">
            <tr>
            <th>#</th>
            <th>Nome Hotel</th>
            <th>Descrizione</th>
            <th>Parcheggio</th>
            <th>Voto</th>
            <th>Distanza dal Centro</th>
            </tr>
        </thead>

        <tbody>
            <?php
            // Array di Hotel
            $hotels = [

                [
                '#' => 1,
                'name' => 'Hotel Belvedere',
                'description' => 'Hotel Belvedere Descrizione',
                'parking' => true,
                'vote' => 4,
                'distance_to_center' => 10.4
                ],

                [
                '#' => 2,
                'name' => 'Hotel Futuro',
                'description' => 'Hotel Futuro Descrizione',
                'parking' => true,
                'vote' => 2,
                'distance_to_center' => 2
                ],

                [
                '#' => 3,
                'name' => 'Hotel Rivamare',
                'description' => 'Hotel Rivamare Descrizione',
                'parking' => false,
                'vote' => 1,
                'distance_to_center' => 1
                ],

                [
                '#' => 4,
                'name' => 'Hotel Bellavista',
                'description' => 'Hotel Bellavista Descrizione',
                'parking' => false,
                'vote' => 5,
                'distance_to_center' => 5.5
                ],

                [
                '#' => 5,
                'name' => 'Hotel Milano',
                'description' => 'Hotel Milano Descrizione',
                'parking' => true,
                'vote' => 2,
                'distance_to_center' => 50
                ],
            ];

            foreach ($hotels as $hotel) {
                echo '<tr>';
                echo '<td>' . $hotel['#'] . '</td>';
                echo '<td>' . $hotel['name'] . '</td>';
                echo '<td>' . $hotel['description'] . '</td>';

                // ? e : sono operatori condizionali. ? significa "se" e : significa "altrimenti".
                echo '<td>' . ($hotel['parking'] ? 'Sì' : 'No') . '</td>';

                echo '<td>' . $hotel['vote'] . '</td>';
                echo '<td>' . $hotel['distance_to_center'] . ' km</td>';
                echo '</tr>';
            }
            ?>
        </tbody>
        </table>

    </div>


</div>




</body>
</html>
