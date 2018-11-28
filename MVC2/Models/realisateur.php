<?php
// $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// $dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
//Le modèle contient toutes les fonctions d'appel à la base de données.


$dbh = new PDO('mysql:host=localhost;dbname=allocine', 'root', '');

function getAllrealisateur() {
    global $dbh;

    $realisateur = $dbh->query('SELECT * FROM realisateur');

    return $realisateur->fetchAll();
    
}
// print_r(getAllrealisateur()); Commande pour appeler la fonction getallrealisaeur

function getOnerealisateur($id) {
    global $dbh;

    $realisateur = $dbh->query('SELECT * FROM realisateur WHERE id='.$id.';');

    return $realisateur->fetch();
}

function getrealisateurByrealisateur($realisateur_id) {
    global $dbh;

    $realisateur = $dbh->query('SELECT * FROM realisateur WHERE realisateur_id='.$realisateur_id.';');

    return $realisateur->fetchAll();
}