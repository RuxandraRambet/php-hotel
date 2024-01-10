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

$filtered_hotels = $hotels;

// Filter parking
$parking = !empty($_GET['parking']) ? true : false;

if ($parking) {
    $hotels_list = [];
    foreach ($filtered_hotels as $hotel) {
        if ($hotel['parking']) {
            $hotels_list[] = $hotel;
        }
    }
    $filtered_hotels = $hotels_list;
}

// Filter vote
$vote = !empty($_GET['vote']) ? intval($_GET['vote']) : false;

if ($vote) {
    $hotels_list=[];
    foreach ($filtered_hotels as $hotel) {
        if ($hotel['vote'] >= $vote) {
            $hotels_list[] = $hotel;
        }
    }
    $filtered_hotels = $hotels_list;
}
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
        <h1 class="text-center">Hotels</h1>
        <div class="hotel-filters py-5">
            <form action="index.php" method="GET">
                <div class="row align-items-center">
                    <!-- Parking Filter -->
                    <div class="col-auto">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="parking" name="parking" <?php if ($parking) : ?> checked <?php endif; ?>>
                            <label for="parking" class="form-check-label">Hotel con parcheggio</label>
                        </div>
                    </div>
                    <!-- Vote Filter -->
                    <div class="col-auto">
                        <select name="vote" class="form-select form-select-sm">
                            <option selected value="">All votes</option>
                            <?php for($i = 1; $i <= 5; $i++) : ?>
                                <option value="<?php echo $i; ?>" <?php if($vote === $i) : ?> selected <?php endif; ?>> Vote <?php echo $i; ?></option>
                            <?php endfor; ?>        
                        </select>

                    </div>
                    <!-- Button -->
                    <div class="col">
                        <button class="btn btn-primary btn-sm">Cerca</button>
                    </div>
                </div>
            </form>
        </div>

        <!-- Lista Hotel - milestone 1 -->
        <!-- <ul>
        <?php foreach ($filtered_hotels as $hotel) : ?>
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
                <?php foreach ($filtered_hotels as $hotel) : ?>
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