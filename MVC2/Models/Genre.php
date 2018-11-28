<?php

//Le modèle contient toutes les fonctions d'appel à la base de données.


$dbh = new PDO('mysql:host=localhost;dbname=allocine', 'root', '');

function getAllgenre() {
    global $dbh;

    $genre = $dbh->query('SELECT * FROM genre');

    return $genre->fetchAll();

}

function getOnegenre($id) {
    global $dbh;

    $genre = $dbh->query('SELECT * FROM genre WHERE id='.$id.';');

    return $genre->fetch();
}

function getgenreBygenre($genre_id) {
    global $dbh;

    $genre = $dbh->query('SELECT * FROM genre WHERE genre_id='.$genre_id.';');

    return $genre->fetchAll();
}