<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" media="(max-device-width: 768px)" href="example.css" />
        <link rel="stylesheet" media="(max-device-width: 480px)" href="example.css" />
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/knacss.css">
        <link rel="stylesheet" href="css/articles.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/fontawesome.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
   </head>
   <body>
    <?php include('header.php'); ?>
    <div class="main_wrap">
        <div class="wrapper grid-1-3">
        <?php include('nav.php'); ?>
        <div id="photob">
            <h2>Présentation</h2>
            <h3>La fac en images</h3>
            <div class="slideshow prez">
                    <ul id="content-slide">
                      <li class="slide">
                        <img src="img/fac/Photobomb1.jpg">
                        <p>Former des futurs chômeurs n’est pas une mince affaire. 
                            Du coup, pour contrer l’absentéisme, on a mis des 
                            Russes un peu partout, ça fait exotique. Mais ça 
                            marche pas super.</p>
                      </li>
                      <li class="slide">
                        <img src="img/fac/Photobomb2.jpg">
                        <p>Dans ta fac, y’a une télé qui te montre ta fac. 
                            Brilliant! #inception </p>
                    </li>
                      <li class="slide">
                        <img src="img/fac/Photobomb3.jpg">
                        <p>Y’a pas à dire, l’UFR SHA en plein 
                            mois d’août ça a quand même de la gueule.</p>
                        </li>
                      <li class="slide">
                        <img src="img/fac/Photobomb4.jpg">
                        <p>La légende raconte que c’est par cette entrée que rentrent 
                            la plupart des étudiants qui habitent près de la gare. 
                            Comme quoi, les légendes c’est pas toujours très 
                            intéressant.</p>
                    </li>
                      <li class="slide">
                        <img src="img/fac/Photobomb5.jpg">
                        <p>Comme beaucoup d’entre nous, il en a trop pris.</p>
                    </li>
                      <li class="slide">
                        <img src="img/fac/Photobomb6.jpg">
                        <p>On a demandé une salle de shoot pour la rentrée 2016-2017 histoire de s’envoyer le café directement par intraveineuse. Bizarrement, notre proposition est restée sans réponse : à tous les coups ça va finir en salle des profs.
                        <p>Bonus : l’abus de glandouille devant la machine à 
                            café peut être néfaste pour certains.</br><a href="cafe.php">Voir la vidéo</a></p>
                    </li>
                      <li class="slide">
                        <img src="img/fac/Photobomb7.jpg">
                        <p>La preuve par l’image qu’en SHA les bons élèves sont au premier 
                            rang et les tocards au fond de la classe.</p>
                    </li>
                    <li class="slide">
                        <img src="img/fac/Photobomb8.jpg">
                        <p>Qu’ils se nomment Pierre, Paul ou Jacques, certains étudiants veulent 
                            vivre dans la nature loin de la pollution. 
                            Et quitter l’UFR des fous pour de bon.</p>
                    </li>
                    <li class="slide">
                        <img src="img/fac/Photobomb9.jpg">
                        <p>Notez le distributeur de bouchons d’oreilles à gauche de votre écran. 
                            Au cas où, inopinément, un groupe de trash metal débarque pour faire un concert. 
                            Si si, ça arrive.</p>

                        <p>Plus sérieusement, évitez quand même de faire trop de bruit. Votre vie en dépend. 
                            Vous êtes prévenus.</br><a href="bu.php">Voir la vidéo</a></p>
                    </li>
                    <li class="slide">
                        <img src="img/fac/Photobomb10.jpg">
                        <p>Dans notre série “Régis est un con” : aujourd’hui, Régis à la fac. Il n’y a pas cours le premier de l’an. 
                            Qu’il est con ce Régis ! </p>
                    </li>
                    </ul>
                    <div id="controles"></div>
                    <div id="arrow">
                        <span class="arrowl"></span>
                        <span class="arrowr"></span>
                    </div>
                    </div>
            </div>  
        </div>
    </div>
</div>
    <?php include('footer.php'); ?>
    <script src="js/libs/jquery-1.12.0.min.js"></script>
    <script src="js/main.js"></script>
   </body>
</html>