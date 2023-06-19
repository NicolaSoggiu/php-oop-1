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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"
        defer></script>
</head>

<body>
    <div class="container">

        <h1 class="text-center text-danger mb-4">MOVIES</h1>

        <ul class="cards-container d-flex justify-content-between flex-wrap">
            <?php foreach ($movies as $movie) : ?>
            <li class="mb-5">
                <?php $movie->printMovie(); ?>
            </li>
            <?php endforeach; ?>
        </ul>

    </div>
</body>

</html>