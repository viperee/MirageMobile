<!DOCTYPE html>
<html lang="fr-FR">
<?php $page = 'programmation'; ?>
<head>
    <title>Programmation</title>
    <?php include("head.php"); ?>
    <link rel="stylesheet" type="text/css" href="assets/css/programmation.css">
    <link rel="stylesheet" type="text/css" href="assets/css/timeline.min.css">
</head>
<body class="no-margin">
<?php include("header.php"); ?>

<main>
    <div class="container-fluid">
        <div class="row">
            <div class="offset-1">
                <h4 class="color-white">Programmation</h4>
            </div>
        </div>
    </div>

    <div id="tabs">
        <ul class="col-11 offset-1 background-noir">
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
        <div class="row pt-4 mr-0 ml-0 background-solitude">
            <div class="offset-1">
                <a href="assets/media/download/programme_mirage.pdf" download><button class="btn-with-icon-black-no-hover"><img src="assets/icons/arrow.svg" alt="Télécharger l'application"><span>Telecharger le programme</span>
                </button></a>
            </div>
            <div class="offset-1 enfant">
                <span class="switch-text">Spécial enfants</span>
                <label class="switch">
                    <input id="checkbox-enfants" type="checkbox">
                    <span class="slider round"></span>
                </label>
            </div>
        </div>
        <div id="tabs-1" class="container-fluid">
            <div class="timeline">
                <div class="timeline__wrap">
                    <div class="timeline__items">
                        <div class="timeline__item no-enfant">
                            <div class="timeline__content">
                                <div id="accordion">
                                    <div class="group">
                                        <div class="header-accordion row">
                                            <div class="header-accordion-content col-10">
                                                <span class="header-accordion-title">Cosmogonie</span>
                                                <img class="header-accordion-icon" src="assets/icons/arrow-down.svg">
                                                <p class="header-accordion-text">Hydrogeny<br>
                                                    Orbihedron<br>
                                                    Noise Signal Silence
                                                </p>
                                                <div class="mt-2">
                                                    <span class="header-accordion-footer">Méca</span>
                                                </div>
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
                                            <p>Avec Hydrogeny, le duo nous donne à voir l’atome le plus simple de la
                                                nature, l’hydrogène, dont la forme terrestre la plus répandue se trouve
                                                dans la composition de l’eau.</p>
                                            <span class="accordion-content-footer">Evelina Domnitch - Dmitry Gelfand</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="timeline__item">
                            <div class="timeline__content">
                                <div id="accordion">
                                    <div class="group">
                                        <div class="header-accordion row">
                                            <div class="header-accordion-content col-10">
                                                <span class="header-accordion-title">Enfant</span>
                                                <img class="header-accordion-icon" src="assets/icons/arrow-down.svg">
                                                <p class="header-accordion-text">Play me a story
                                                </p>
                                                <div class="mt-2">
                                                    <span class="header-accordion-footer">Méca</span>
                                                </div>
                                            </div>
                                            <div class="header-accordion-time">
                                                <p class="header-accordion-time-text">10h30<br>
                                                    I<br>
                                                    13h</p>
                                            </div>
                                        </div>
                                        <div class="accordion-content">
                                            <img src="assets/media/img/play-story.svg">
                                            <span class="accordion-content-title">Play me a story</span>
                                            <p>Cette exposition réunit 7 projets qui explorent les nouvelles formes hybrides de la narration à l’ère du numérique. Chaque projet explore de nouvelles configurations pour la narration via des objets de notre quotidien : un jeu de cartes, un globe, une lanterne de lecture…</p>
                                            <span class="accordion-content-footer">Collectif de 12 installateurs</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="timeline__item no-enfant">
                            <div class="timeline__content">
                                <div id="accordion">
                                    <div class="group">
                                        <div class="header-accordion row">
                                            <div class="header-accordion-content col-10">
                                                <span class="header-accordion-title">Réalité virtuelle</span>
                                                <img class="header-accordion-icon" src="assets/icons/arrow-down.svg">
                                                <p class="header-accordion-text">Cosmorider</p>
                                                <div class="mt-2">
                                                    <span class="header-accordion-footer">Musée mer marine</span>
                                                </div>
                                            </div>
                                            <div class="header-accordion-time">
                                                <p class="header-accordion-time-text">15h30<br>
                                                    I<br>
                                                    18h</p>
                                            </div>
                                        </div>
                                        <div class="accordion-content">
                                            <img src="assets/media/img/realite-virtuelle.svg">
                                            <span class="accordion-content-title">Cosmorider</span>
                                            <p>A 360°, vivez l’aventure spatiale de Thomas Pesquet et accompagnez l’astronaute français jusqu’à sa sortie dans l’espace grâce aux premières images tournées dans l’espace en réalité virtuelle.</p>
                                            <span class="accordion-content-footer">Pierre-Emmanuel Le Goff - Jürgen Hansen</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="timeline__item">
                            <div class="timeline__content">
                                <div id="accordion">
                                    <div class="group">
                                        <div class="header-accordion row">
                                            <div class="header-accordion-content col-10">
                                                <span class="header-accordion-title">Enfant</span>
                                                <img class="header-accordion-icon" src="assets/icons/arrow-down.svg">
                                                <p class="header-accordion-text">Atelier Art et sciences</p>
                                                <div class="mt-2">
                                                    <span class="header-accordion-footer">Musée mer marine</span>
                                                </div>
                                            </div>
                                            <div class="header-accordion-time">
                                                <p class="header-accordion-time-text">15h<br>
                                                    I<br>
                                                    18h</p>
                                            </div>
                                        </div>
                                        <div class="accordion-content">
                                            <img src="assets/media/img/arts-sciences.svg">
                                            <span class="accordion-content-title">Atelier Art et sciences</span>
                                            <p>Les voyages intergalactiques nous proposent une découverte des confins de notre univers, repoussant les limites de notre perception et de notre compréhension. </p>
                                            <span class="accordion-content-footer">DSAA Villefontaine</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="timeline__item no-enfant">
                            <div class="timeline__content">
                                <div id="accordion">
                                    <div class="group">
                                        <div class="header-accordion row">
                                            <div class="header-accordion-content col-10">
                                                <span class="header-accordion-title">Soirée de performances</span>
                                                <img class="header-accordion-icon" src="assets/icons/arrow-down.svg">
                                                <p class="header-accordion-text">DJ Set<br>Schnautzi<br>Pam Sound System</p>
                                                <div class="mt-2">
                                                    <span class="header-accordion-footer">La fabrique Pola</span>
                                                </div>
                                            </div>
                                            <div class="header-accordion-time">
                                                <p class="header-accordion-time-text">21h30<br>
                                                    I<br>
                                                    02h</p>
                                            </div>
                                        </div>
                                        <div class="accordion-content">
                                            <img src="assets/media/img/soiree-performances.svg">
                                            <span class="accordion-content-title">Schnautzi</span>
                                            <p>Dj, boss du label Argent Sale et animateur de l’émission La Sélection, il aime créer des ponts entre les musiques d’hier et d’aujourd’hui et collisionner les sonorités occidentales avec des morceaux venus d’ailleurs.</p>
                                        </div>
                                    </div>
                                </div>
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