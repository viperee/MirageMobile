<!DOCTYPE html>
<html lang="fr-FR">
<?php $page = 'festival'; ?>
<head>
    <title>Festival</title>
    <?php include("head.php"); ?>
    <link rel="stylesheet" type="text/css" href="assets/css/festival.css">
</head>
<body class="no-margin background-noir">
<?php include("header.php"); ?>

<main>
    <div class="container-fluid">
        <div class="row">
            <div class="offset-1">
                <h4 class="color-white">Le Festival</h4>
            </div>
        </div>
        <div class="row">
            <div class="no-padding col-10 offset-1">
                <p class="text-labeur color-white text-left">Le Mirage Festival propose à travers une programmation ambitieuse et
                    pluridisciplinaire, un panorama des cultures numériques. Pour rendre
                    compte de la richesse de cette création contemporaine nourrie par les
                    technologies, le festival propose un format unique s’articulant autour
                    d’expositions et de soirées de performances et concerts.</p>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row background-solitude festival-description-wrapper">
            <div id="festival-details" class="background-white">
                <div class="row">
                    <div class="col festival-details-text">
                        <h3 class="color-noir">Cosmogonie</h3>
                    </div>
                    <div class="col-1"></div>
                    <div class="col festival-details-text">
                        <p class="text-labeur text-left">
                            Orbitant autour de la thématique spatiale, cette huitième édition du Mirage Festival se
                            penche sur la façon dont les artistes abordent différentes approches de notre relation au
                            cosmos et sonde la manière dont la conquête spatiale, depuis ses débuts, a influencé et
                            transcendé les idées et les créations.<br><br><br><br>
                            L’espace, le cosmos, la galaxie, les technologies liées à son exploration, son
                            esthétique, ses horizons philosophiques et les
                            imaginaires qui les habitent sont autant de sujets abordés par les artistes de façon
                            poétique, fictionnelle, historique ou critique.
                        </p>
                    </div>
                </div>
            </div>
            <div id="ambiance-details">
                <div class="row">
                    <p class="ambiance-title">Ambiance</p>
                </div>
                <div class="row">
                    <div id="ambiance-dj">
                        <img id="img-ambiance-main" src="assets/media/img/ambiance1.jpg">
                    </div>
                    <div>
                        <div class="row">
                            <div class="col-4">
                                <img class="img-ambiance" src="assets/media/img/ambiance1.jpg">
                            </div>
                            <div class="col-4">
                                <img class="img-ambiance" src="assets/media/img/ambiance2.jpg">
                            </div>
                            <div class="col-4">
                                <img class="img-ambiance" src="assets/media/img/ambiance3.jpg">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <img class="img-ambiance" src="assets/media/img/ambiance4.jpg">
                            </div>
                            <div class="col-4">
                                <img class="img-ambiance" src="assets/media/img/ambiance5.jpg">
                            </div>
                            <div class="col-4">
                                <img class="img-ambiance" src="assets/media/img/ambiance6.jpg">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <img class="img-ambiance" src="assets/media/img/ambiance7.jpg">
                            </div>
                            <div class="col-4">
                                <img class="img-ambiance" src="assets/media/img/ambiance8.jpg">
                            </div>
                            <div class="col-4">
                                <img class="img-ambiance" src="assets/media/img/ambiance9.jpg">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <img class="img-ambiance" src="assets/media/img/ambiance10.jpg">
                            </div>
                            <div class="col-4">
                                <img class="img-ambiance" src="assets/media/img/ambiance11.jpg">
                            </div>
                            <div class="col-4">
                                <img class="img-ambiance" src="assets/media/img/ambiance12.jpg">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <img class="img-ambiance" src="assets/media/img/ambiance13.jpg">
                            </div>
                            <div class="col-4">
                                <img class="img-ambiance" src="assets/media/img/ambiance14.jpg">
                            </div>
                            <div class="col-4">
                                <img class="img-ambiance" src="assets/media/img/ambiance15.jpg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include("footer.php"); ?>

<!--IMPORTS JS-->
<?php include("script.php"); ?>
<script src="assets/js/festival.js"></script>
<!--/IMPORTS JS-->
</body>
</html>