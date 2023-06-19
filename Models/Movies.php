<?php

class Movies
{
    public string $name;
    public string $director;
    public string $playingTime;
    public string $genre;


    public function __construct($name, $director, $playingTime, $genre)
    {
        $this->name = $name;
        $this->director = $director;
        $this->playingTime = $playingTime;
        $this->genre = $genre;
    }

    public function printMovie()
    {
        echo "<h1>{$this->name}</h1>";
        echo "<h3>{$this->director}</h3>";
        echo "<span>{$this->playingTime}</span>";
        echo "<h4>{$this->genre}</h4>";
    }
}