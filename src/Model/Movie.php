<?php

class Movie{
    public string $title;
    public int $duration;
    public MovieGender $movieGender;
    public int $yearOfRelease;
    public Director $director;
    public string $synopsis;

    public function __construct(
        string $title,
        int $duration,
        MovieGender $movieGender,
        int $yearOfRelease,
        Director $director
    ){
        $this->title = $title;
        $this->duration = $duration;
        $this->movieGender = $movieGender;
        $this->yearOfRelease = $yearOfRelease;
        $this->director = $director;
    }
}