<?php

$filteredHotels = [];

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

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <title>Hotels</title>
</head>

<body>

    <div class="container">


        <table>
            <thead>
                <tr>
                    <td>Hotel</td>
                    <td>Descrizione</td>
                    <td>Parcheggio</td>
                    <td>Voto</td>
                    <td>Distanza dal centro</td>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($hotels as $arrayOne) {
                ?>
                    <tr>
                        <td><?php echo $arrayOne["name"] ?></td>
                        <td><?php echo $arrayOne["description"] ?></td>
                        <td><?php echo $arrayOne["parking"] ?></td>
                        <td><?php echo $arrayOne["vote"] ?></td>
                        <td><?php echo $arrayOne["distance_to_center"] . " cm"  ?></td>
                    </tr>

                <?php
                }
                ?>

            </tbody>

        </table>
    </div>




</body>

</html>