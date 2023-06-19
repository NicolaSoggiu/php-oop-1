<?php

include __DIR__ . "/models/Movies.php";
include __DIR__ . "/models/Genres.php";
include __DIR__ . "/db.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>

<body>

    <h1>MOVIES</h1>
    <ul>
        <?php foreach ($movies as $movie) : ?>
        <li>
            <?php $movie->printMovie(); ?>
        </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>