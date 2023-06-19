<?php

include __DIR__ . "/models/Movies.php";
include __DIR__ . "/models/Genres.php";

$Batman = new Movies("Batman Begins", "Christopher Nolan", "2005", "140 min", new Genres(["Action, Fantasy"]));
$CC = new Movies("Coach Carter", "Thomas Carter", "2005", "136 min", new Genres(["Sporty, Drammatic"]));
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
        <li>
            <?php echo $Batman->printMovie() ?>
        </li>
        <li>
            <?php echo $CC->printMovie() ?>
        </li>
    </ul>
</body>

</html>