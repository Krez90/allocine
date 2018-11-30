<?php
include('Models/Film.php');
include('Models/Genre.php');
include('Models/Realisateur.php');
include('Models/Nationalite.php');
include('Models/Acteur.php');

$id = $_GET['id'];                        //$id = id dans l'url                                               
$film = getOneFilm($id);                  //$film = le film a cette id
$genres = getFilmGenre($id);              //$genres = les genres du film
$realisateurs = getFilmRealisateur($id);  //$realisateur = les realisateurs du film
$nationalite = getOneNationalite($id);    //$realisateur = la nationalité du film
$acteurs = getFilmActeur($id);            //$acteur = Les acteurs du film

include('Views/FilmView.php');
?>