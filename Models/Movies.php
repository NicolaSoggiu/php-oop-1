<?php

class Movies
{
    public string $name;
    public string $director;
    public string $year;
    public string $playingTime;
    public Genres $genre;


    public function __construct($name, $director, $year, $playingTime, Genres $genre)
    {
        $this->name = $name;
        $this->director = $director;
        $this->year = $year;
        $this->playingTime = $playingTime;
        $this->genre = $genre;
    }

    public function printMovie()
    {
        echo "<h1>{$this->name}</h1>";
        echo "<h3>{$this->director}</h3>";
        echo "<h4>{$this->year}</h4>";
        echo "<span>{$this->playingTime}</span>";
        echo "<ul> Genres: ";
        foreach ($this->genre->movieGenre as $genre) {
            echo "<li>{$genre}</li>";
        }
        echo "</ul>";
    }
}