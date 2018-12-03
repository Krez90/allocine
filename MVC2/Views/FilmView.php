<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Annuaire de films - <?=$page?></title>
    <link rel="stylesheet" href="../Css/style.css">
</head>
<body>
    <h1>
        <?=$film['titre']?>
    </h1>
    <img src="<?='../Css/image/'.$film['image']?>">
    <h3>
        Date De Sortie : <?=$film['date_de_sortie']?>
    </h3>
    <h3>
        Genre :
        <?php foreach ($genres as $genre){
            echo $genre['genre'].' ';
        }?>
    </h3>
    <h3>
        Nationalité : <?=$nationalite['nationalite']?>
    </h3>
    <h3>
        Réalisateur : 
        <?php foreach ($realisateurs as $realisateur){
            echo $realisateur['realisateur'].' ';
        }?>
    </h3>
    <h3>
        Acteurs : 
        <?php foreach ($acteurs as $acteur){
            echo $acteur['acteur'].' ';
        }?>
    </h3>
    <p>
        <?=$film['description']?>
    </p>
</body>
</html>