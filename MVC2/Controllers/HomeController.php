<?php

//le controlleur inclut le modèle
include('Models/Film.php');



//Récupérer les données (ici, tous les films car on est sur la home)
$film = getAllfilm();

//traiter les données
// foreach ($film as $key => $film) {
//     $film['realisateur'] = ucfirst($film['realisateur']); //Mets une majuscule au nom du réalisateur
// }

//inclure la vue
include('Views/HomeView.php');

