<?php

//Le modèle contient toutes les fonctions d'appel à la base de données.


$dbh = new PDO('mysql:host=localhost;dbname=allocine;charset=utf8','root', '');

function getAllfilm() {
    global $dbh;

    $film = $dbh->query('SELECT * FROM film');

    return $film->fetchAll();
}

function getOnefilm($id) {
    global $dbh;

    $film = $dbh->query('SELECT * FROM film WHERE id='.$id.';');

    return $film->fetch();
}

function getfilmByGenre($genre_id) {
    global $dbh;

    $film = $dbh->query('SELECT * FROM film WHERE genre_id='.$genre_id.';');

    return $film->fetchAll();
}