<?php

require "../../vendor/autoload.php";

use APP\Model\Director;
use APP\Model\Movie;
use APP\Model\MovieGender;


$director_one = Director("Sam Raimi");
$movie_one = new Movie(
    yearOfRelease: 1981,
    movieGender: MovieGender::HORROR,
    director: $director_one,
    duration: 130,
    title: "The Evil Dead"
);

echo "<pre>";
var_dump($movie_one);
echo "<pre>";