<?php

include __DIR__ . "/models/Movies.php";

$Batman = new Movies("Batman Begins", "Christopher Nolan", "140 min", "Action");
echo $Batman->printMovie();

$CC = new Movies("Coach Carter", "Thomas Carter", "136 min", "Sportivo");
echo $CC->printMovie();