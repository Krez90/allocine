<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Annuaire de films - <?=$page?></title>
    <link rel="stylesheet" href="Css/style.css">
</head>

<body>
    <h1>
        <?=$page?>
    </h1>
    <ul>
        <?php foreach ($film as $film){ ?>                        
           <?="<li><a href='film/" .$film['id']. "'>" .$film['titre']. "</a></li>" ?>
        <?php } ?>
    </ul>
</body>
</html>