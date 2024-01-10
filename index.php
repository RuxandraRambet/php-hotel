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
// echo "<pre>";
//     var_dump($hotels);
// echo "</pre>";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Hotel</title>
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Hotels</h1>
        <!-- Lista Hotel - milestone 1 -->
        <ul>
        <?php foreach ($hotels as $hotel) : ?>
            <li>
                <h2><?php echo $hotel['name']; ?></h2>
                <div><?php echo $hotel['description']; ?></div>
                <div>Parking:<?php echo $hotel['parking'] === true ? 'Si' : 'No'; ?></div>
                <div>Vote:<?php echo $hotel['vote']; ?></div>
                <div>Distance to Center:<?php echo $hotel['distance_to_center']; ?> km</div>
            </li>
        <?php endforeach; ?>
        </ul>
        <!-- /Lista Hotel - milestone 1-->
    </div>
</body>

</html>