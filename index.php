<?php


class Movie {
  public $title;
  public $year;
  public $genre;

  public function __construct($genre) {
    $this->genre = $genre;
  }

  public function stars($vote) {
    return $vote / 2;
  }
}

$unknowns = new Movie("Drammatico");
$voteInt = $unknowns->stars(10);
$unknowns->title = "Perfetti sconosciuti";
$unknowns->year = "2016";


echo "Titolo: $unknowns->title <br>";
echo "Anno: $unknowns->year <br>";
echo "Genere: $unknowns->genre <br>";
echo "Voto: {$unknowns->stars(10)} <br>";

 ?>
