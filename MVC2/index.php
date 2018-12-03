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
      
        <!-- Slider 1 -->
        
        <div class="slide">
            <div class="carre1">
                <img class="image" src="css/image/avenger.jpg"> 
            </div>

            <div class="carre2">
                <img class="image" src="css/image/batman.jpg"> 
            </div>

            <div class="carre3">
                <img class="image" src="css/image/django.jpg"> 
            </div>

            <div class="carre4">
                <img class="image" src="css/image/equalizer.jpg"> 
            </div>
        </div>

        <!-- Slider 2 -->

        <div class="slide">
            <div class="carre1">
                <img class="image" src="css/image/harryPotter4.jpg"> 
            </div>

            <div class="carre2">
                <img class="image" src="css/image/LaLigneVerte.jpg"> 
            </div>

            <div class="carre3">
                <img class="image" src="css/image/LaReineDesNeiges.jpg"> 
            </div>

            <div class="carre4">
                <img class="image" src="css/image/leNombre23.jpg"> 
            </div>
        </div>

       <!-- Slider 3 -->

       <div class="slide">
            <div class="carre1">
                <img class="image" src="css/image/lesBronzes.jpg"> 
            </div>

            <div class="carre2">
                <img class="image" src="css/image/lordsOfWar.jpg"> 
            </div>

            <div class="carre3">
                <img class="image" src="css/image/missionImpossible.jpg"> 
            </div>

            <div class="carre4">
                <img class="image" src="css/image/pulpfiction.jpg"> 
            </div>
        </div>

        <!-- Slider 4 -->

        <div class="slide">
           <h2 id="avenir">A VENIR PROCHAINEMENT :</h2>
           <div class="carre1">
                <img class="image" src="css/image/RobinDesBois.jpg"> 
            </div>

            <div class="carre2">
                <img class="image" src="css/image/LeGrinch.jpg"> 
            </div>

            <div class="carre3">
                <img class="image" src="css/image/BohemianRhapsody.jpg"> 
            </div>

            <div class="carre4">
                <img class="image" src="css/image/LesAnimauxFantastiques2.jpg"> 
            </div>
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
