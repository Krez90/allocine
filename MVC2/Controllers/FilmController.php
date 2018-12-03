<?php
include('Models/film.php');
include('Models/genre.php');
include('Models/realisateur.php');
include('Models/nationalite.php');
include('Models/acteur.php');
include('Models/recompense.php');

$id = $_GET['id'];                        //$id = id dans l'url                                               
$film = getOneFilm($id);                  //$film = le film a cette id
$genres = getFilmGenre($id);              //$genres = les genres du film
$realisateurs = getFilmRealisateur($id);  //$realisateur = les realisateurs du film
$nationalite = getOneNationalite($id);    //$realisateur = la nationalité du film
$acteurs = getFilmActeur($id);            //$acteur = Les acteurs du film
$recompensesActeur = getActeurRecompense($id);
$recompensesRealisateur = getRealisateurRecompense($id);
$recompensesFilm = getFilmRecompense($id);

include('Views/FilmView.php');
?>