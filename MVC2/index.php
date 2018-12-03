<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Image Slider</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css.css" />
</head>
<body>
       

            
    <div class="topSlider">
      
        
        <div class="slide"><p class="ecriture">hue</p></div>

        <div class="slide"><p class="ecriture">bbbbb</p></div>

       
        <div class="slide"><p class="ecriture">bbbbb</p></div>

        <div class="slide"><p class="ecriture">bbbbb</p></div>
    </div>
</body>
</html>
<?php
if(isset($_GET['page']) && !empty($_GET['page'])) {              //Si on a une info dans $_GET['page'], c'est la page demandée
    $page = $_GET['page'];
}
else {
    $page = 'Home';                                              //Si il n'y a rien dans $_GET['page'], on va sur la home
}

$page = ucfirst($page);                                          //On passe la première lettre en majuscule car les controlleurs s'appellent FilmController.php et HomeController.php mais les URLs sont en général en minuscule

include('Controllers/'.$page.'Controller.php');                  //On inclut le controller en fonction de la page demandée
?>
