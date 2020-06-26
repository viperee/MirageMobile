<!DOCTYPE html>
<html lang="fr-FR">
<?php $page = 'experience-insolite'; ?>
<head>
    <title>Expérience Insolite</title>
    <?php include("head.php"); ?>
    <link rel="stylesheet" type="text/css" href="assets/css/experience-insolite.css">
</head>
<body class="no-margin">
<?php include("header.php"); ?>

<main>
    <div class="row background-noir mr-0">
        <div class="offset-2">
            <h4 class="color-white">Expérience Insolite</h4>
        </div>
    </div>
    
    <div class="container-fluid background-solitude affiche-details-wrapper">
        <div id="affiche-details" class="row background-white">
            
            <div class="col affiche-details-text">
                <p class="affiche-title">Affiche Interactive
                </p>
                <p class="text-labeur">Vous souhaitez découvrir notre affiche en réalité augmentée :<br><br>

                    1/ Téléchargez Artivive (sur votre store Android ou Apple)<br>
                    2/ Scannez l’affiche avec votre application Artivive !
                </p>
                <a id="link-btn-download-app" href="http://onelink.to/st23vu" target="_blank">
                    <button id="btn-download-app"><img src="assets/icons/arrow.svg"
                                                       alt="Télécharger l'application"><span>Télécharger l'application</span>
                    </button>
                </a>
                <img class="affiche" src="assets/media/img/affiche-mirage.svg">
            </div>
        </div>
        <div id="parcours-urbains" class="row background-white">
            <div class="row">
                <div id="parcours-urbains-text" class="col">
                    <h5>Parcours Urbain</h5>
                    <p class="text-labeur m-0">Le Mirage Festival vous propose de vivre
                        différemment votre balade dans le centre-ville de
                        Bordeaux.<br><br>
                        Plusieurs lieux emblématiques de la ville ont été
                        choisis pour accueillir des œuvres exposées en
                        grand format, et former un parcours urbain
                        d’artistes qui a pour but de servir de base à une
                        expérience en réalité augmentée.<br><br>
                        Rendez-vous dans la ville à proximité de ces
                        points, sortez votre téléphone et pointez les
                        panneaux sur site affichant les œuvres, pour
                        découvrir une version augmentée de ces
                        dernières.</p>
                    <div id="video-parcours-urbains">
                        <video autoplay muted loop>
                            <source src="./assets/media/video/parcours.mp4" type="video/mp4">
                        </video>
                        </divid>
                    </div>
                </div>
            </div>
        </div>
        <div id="google-map-wrapper">
            <div class="row">
                <p class="map-title">Map</p>
            </div>
            <div  class="row background-white">
                <div class="col p-0">
                    <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1khoOBWkMR1mxA2JjjvdAi4fJb0YDLJqL"
                            width="640"
                            height="480"></iframe>
                </div>
            </div>
        </div>
</main>

<?php include("footer.php"); ?>

<!--IMPORTS JS-->
<?php include("script.php"); ?>
<!--/IMPORTS JS-->

</body>
</html>