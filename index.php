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
        <link rel="stylesheet" href="css/home.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/fontawesome.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <div id="fb-root"></div>
        <script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1003427573063813',
      xfbml      : true,
      version    : 'v2.5'
    });
  };
  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
<?php include('header.php'); ?>
    <div class="main_wrap">
        <div class="wrapper grid-1-3">
            <?php include('nav.php'); ?>
            <div id="content">
<p>Bienvenue sur le vrai site de l’UFR SHA de l’université de Poitiers. Un établissement créateur de tocards depuis 1984. Retrouvez ici toutes les bonnes raisons de nous rejoindre pour être un vrai branleur à l’avenir incertain.</p>

<p>L’équipe des SHArlatans</p>            
                <div id="vid">
<iframe width="560" height="315" src="https://www.youtube.com/embed/5ZbHJ5BpIlM" frameborder="0" allowfullscreen></iframe>
                </div>
                <div id="infos" class="grid-3">
                    <div>
                        <a href="img/affichehi.jpg">
                            <h3>A la une</h3>
                            <div>
                                <img src="img/affichehi.jpg">
                            </div>
                        </a>

                    </div>
                    <div>
                        <a href="agenda.php">
                            <h3>Agenda</h3>
                            <div>
                                <div class="item">
                                    <div class="date">
                                        <span>04</span>
                                        <span>Fév</span>
                                    </div>
                                    <div class="event">
                                        <h4>Manifestation</h4>
                                        <p>Bar Wars, la guerre est déclarée.</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="date">
                                        <span>12</span>
                                        <span>Fév</span>
                                    </div>
                                    <div class="event">
                                        <h4>Jeu vidéo</h4>
                                         <p>  Tournoi Super Smash Bros : entrez dans l'arène </p>                                  
                                </div>
                                </div>
                                <div class="item">
                                    <div class="date">
                                        <span>16</span>
                                        <span>Fév</span>
                                    </div>
                                    <div class="event">
                                        <h4>Travaux manuels</h4>
                                        <p>Quand le tricot devient un truc de jeunes</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="article_parents.php">
                            <h3>Témoignages</h3>
                            <h4>Témoignage de parents</h4>
                            <p>Eduquer au mieux son enfant, lui donner les clés de la réussite est le souhait de chaque parent. 
                                Mais soyons réalistes, parfois, tous nos efforts partent en sucette. 
                                </p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
                <div id="social">
                    <h3>#Sharlatan</h3>
                <div id="fb">
                 <div class="fb-page" data-href="https://www.facebook.com/SHArlatan-180596095633014/?fref=ts" data-tabs="timeline" data-width="450px" data-height="400px" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"></div>
                </div>
                    <div id="tw">
                        <span></span>
                    <a class="twitter-timeline" href="https://twitter.com/sharlatan86" data-widget-id="691633943980961792">Tweets de @sharlatan86</a>
                    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                    </div>

                    <div id="ig">
                    <iframe src="http://snapwidget.com/sc/?u=c2hhcmxhdGFuXzg2fGlufDE1MHwzfDN8fG5vfDV8bm9uZXxvblN0YXJ0fHllc3xubw==&ve=260116" title="Instagram Widget" class="snapwidget-widget" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:500px; height:150px"></iframe>
                    </div>
            </div>
        </div>
    </div>
    <?php include('footer.php'); ?>
    </body>
</html>
