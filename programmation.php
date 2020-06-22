<!DOCTYPE html>
<html lang="fr-FR">
<?php $page = 'programmation'; ?>
<head>
    <title>Programmation</title>
    <?php include("head.php"); ?>
    <link rel="stylesheet" type="text/css" href="assets/css/programmation.css">
    <link rel="stylesheet" type="text/css" href="assets/css/timeline.min.css">
</head>
<body>
<?php include("header.php"); ?>

<main>
    <div class="row">
        <div class="offset-2">
            <h4 class="color-white">Programmation</h4>
        </div>
    </div>

    <div id="tabs">
        <ul class="background-noir">
            <li><a href="#tabs-1"><span>Mercredi</span>
                    <p>08 Juillet</p></a></li>
            <li><a href="#tabs-2"><span>Jeudi</span>
                    <p>09 Juillet</p></a></li>
            <li><a href="#tabs-3"><span>Vendredi</span>
                    <p>10 Juillet</p></a></li>
            <li><a href="#tabs-4"><span>Samedi</span>
                    <p>11 Juillet</p></a></li>
            <li><a href="#tabs-5"><span>Dimanche</span>
                    <p>12 Juillet</p></a></li>
        </ul>
        <div class="row mt-4 mr-0 ml-0 background-solitude">
            <div class="offset-1">
                <a href="assets/media/download/programme_mirage.pdf" download><button class="btn-with-icon-black-no-hover"><img src="assets/icons/arrow.svg"
                                                                  alt="Télécharger l'application"><span>Telecharger le programme</span>
                </button></a>
            </div>
            <div class="offset-6 margin-vertical-center">
                <span class="switch-text">Spécial enfants</span>
                <label class="switch">
                    <input type="checkbox">
                    <span class="slider round"></span>
                </label>
            </div>
        </div>
        <div id="tabs-1" class="container-fluid">
            <div class="timeline">
                <div class="timeline__wrap">
                    <div class="timeline__items">
                        <div class="timeline__item">
                            <div class="timeline__content">
                                <div id="accordion">
                                    <div class="group">
                                        <div class="header-accordion">
                                            <div class="header-accordion-content">
                                                <span class="header-accordion-title">Cosmogonie</span>
                                                <p class="header-accordion-text">Hydrogeny<br>
                                                    Orbihedron<br>
                                                    Noise Signal Silence
                                                </p>
                                                <span class="header-accordion-footer">Meca</span>
                                            </div>
                                            <div class="header-accordion-time">
                                                <p class="header-accordion-time-text">10h30<br>
                                                    I<br>
                                                    13h</p>
                                            </div>
                                        </div>


                                        <div class="accordion-content">
                                            <img src="assets/media/img/hydrogeny.svg">
                                            <span class="accordion-content-title">Hydrogeny</span>
                                            <p>Avec Hydrogeny, le duo nous donne à voir l’atome le plus simple de la nature, l’hydrogène, dont la forme terrestre la plus répandue se trouve dans la composition de l’eau.</p>
                                            <span class="accordion-content-footer">Evelina Domnitch - Dmitry Gelfand</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="timeline__item">
                            <div class="timeline__content">
                                Content / markup here
                            </div>
                        </div>
                        <div class="timeline__item">
                            <div class="timeline__content">
                                Content / markup here
                            </div>
                        </div>
                        <div class="timeline__item">
                            <div class="timeline__content">
                                Content / markup here
                            </div>
                        </div>
                        <div class="timeline__item">
                            <div class="timeline__content">
                                Content / markup here
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="tabs-2" class="container-fluid">
        </div>
        <div id="tabs-3" class="container-fluid">
        </div>
        <div id="tabs-4" class="container-fluid">
        </div>
        <div id="tabs-5" class="container-fluid">
        </div>
    </div>
</main>

<?php include("footer.php"); ?>

<!--IMPORTS JS-->
<?php include("script.php"); ?>
<script src="assets/js/programmation.js"></script>
<script src="assets/js/timeline.min.js"></script>
<!--/IMPORTS JS-->

</body>
</html>