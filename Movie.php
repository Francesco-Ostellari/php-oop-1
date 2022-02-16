<?php

class Movie
{
  public $title;
  public $actors;
  public $scenography;
  public $producers;
  public $genres;
  public $date;

  public function __construct($title, $actors, $date)
  {
    $this->title = $title;
    $this->actors = $actors;
    $this->date = $date;
  }

  public function getTitle()
  {
    return $this->title;
  }
  public function setTitle($title)
  {
    $this->title = $title;
  }

  public function getActors()
  {
    return $this->actors;
  }
  public function setEditor($actors)
  {
    $this->actors = $actors;
  }

  public function getDate()
  {
    return $this->date;
  }
  public function setCover($date)
  {
    $this->date = $date;
  }
  
  public function getScenography()
  {
    return $this->scenography;
  }
  public function setScenography($scenography)
  {
    $this->scenography = $scenography;
  }

  public function getProducers()
  {
    return $this->producers;
  }

  public function setProducers($producers)
  {
    $this->producers = $producers;
  }

  public function getGenres()
  {
    return $this->genres;
  }
  public function setGenres($genres)
  {
    $this->genres = $genres;
  }

}

$movie = new Movie('Braveheart', 'Mel Gibson', '1995');
$movie->setScenography('Thomas E. Sanders');
$movie->setProducers('Mel Gibson');
$movie->setGenres('Azione');

$movie2 = new Movie ('Troy', 'Brad Pitt', '2004');
$movie2->setScenography('David Benioff');
$movie2->setProducers('Wolfgang Petersen');
$movie2->setGenres('Guerra');

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Movie</title>
</head>
<body>
  <h1>MOVIE:</h1>
  <ul>
    <li>Titolo: <?=$movie->getTitle()?></li>
    <li>Attore: <?=$movie->getActors()?></li>
    <li>Anno: <?=$movie->getDate()?></li>
    <li>Scenografia: <?=$movie->getScenography()?></li>
    <li>Regista: <?=$movie->getProducers()?></li>
    <li>Genere: <?=$movie->getGenres()?></li>
  </ul>
  <h1>MOVIE 2:</h1>
  <ul>
    <li>Titolo: <?=$movie2->getTitle()?></li>
    <li>Attore: <?=$movie2->getActors()?></li>
    <li>Anno: <?=$movie2->getDate()?></li>
    <li>Scenografia: <?=$movie2->getScenography()?></li>
    <li>Regista: <?=$movie2->getProducers()?></li>
    <li>Genere: <?=$movie2->getGenres()?></li>
  </ul>
</body>
</html>