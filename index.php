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
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Hotels</h1>
        <!-- Lista Hotel - milestone 1 -->
        <!-- <ul>
        <?php foreach ($hotels as $hotel) : ?>
            <li>
                <h2><?php echo $hotel['name']; ?></h2>
                <div><?php echo $hotel['description']; ?></div>
                <div>Parking:<?php echo $hotel['parking'] === true ? 'Si' : 'No'; ?></div>
                <div>Vote:<?php echo $hotel['vote']; ?></div>
                <div>Distance to Center:<?php echo $hotel['distance_to_center']; ?> km</div>
            </li>
        <?php endforeach; ?>
        </ul> -->
        <!-- /Lista Hotel - milestone 1-->
        
        <!-- Milestone 2 - table -->
        <table class="table table-striped">
            <thead>
                <tr class="table-primary">
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Parking</th>
                    <th scope="col">Vote</th>
                    <th scope="col">Distance</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($hotels as $hotel) : ?>
                    <tr>
                        <td class="table-primary"><?php echo $hotel['name']; ?></td>
                        <td class="table-success"><?php echo $hotel['description']; ?></td>
                        <td class="table-danger"><?php echo $hotel['parking'] === true ? 'Si' : 'No'; ?></td>
                        <td class="table-warning"><?php echo $hotel['vote']; ?></td>
                        <td class="table-info"><?php echo $hotel['distance_to_center']; ?> km</td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <!-- /Milestone 2 - table -->
    </div>
</body>

</html>