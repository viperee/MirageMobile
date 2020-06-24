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
            <div class="timeline">
                <div class="timeline__wrap">
                    <div class="timeline__items">
                        <div class="timeline__item no-enfant">
                            <div class="timeline__content">
                                <div id="accordion">
                                    <div class="group">
                                        <div class="header-accordion row">
                                            <div class="header-accordion-content col-10">
                                                <span class="header-accordion-title">Réalité virtuelle</span>
                                                <img class="header-accordion-icon" src="assets/icons/arrow-down.svg">
                                                <p class="header-accordion-text">Moonshine
                                                </p>
                                                <div class="mt-2">
                                                    <span class="header-accordion-footer">Musée mer marine</span>
                                                </div>
                                            </div>
                                            <div class="header-accordion-time">
                                                <p class="header-accordion-time-text">10h30<br>
                                                    I<br>
                                                    13h</p>
                                            </div>
                                        </div>
                                        <div class="accordion-content">
                                            <img src="assets/media/img/moonshine.svg">
                                            <span class="accordion-content-title">Moonshine</span>
                                            <p>Dans Moonshine, la quête du masque de la connaissance absolue nous fait voyager à travers des galaxies et leurs fantaisies.</p>
                                            <span class="accordion-content-footer">Antoine Barras - Ivan Chestopaloff - Basile Fournier</span>
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
                                                <p class="header-accordion-time-text">10h<br>
                                                    I<br>
                                                    13h</p>
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
                                                <span class="header-accordion-title">Cosmogonie</span>
                                                <img class="header-accordion-icon" src="assets/icons/arrow-down.svg">
                                                <p class="header-accordion-text">Soleil Noir<br />
                                                    Météores<br />
                                                    JP Contemplant le trou
                                                </p>
                                                <div class="mt-2">
                                                    <span class="header-accordion-footer">Méca</span>
                                                </div>
                                            </div>
                                            <div class="header-accordion-time">
                                                <p class="header-accordion-time-text">15h30<br>
                                                    I<br>
                                                    18h</p>
                                            </div>
                                        </div>
                                        <div class="accordion-content">
                                            <img src="assets/media/img/soleil-noir.svg">
                                            <span class="accordion-content-title">Soleil Noir</span>
                                            <p>L’installation de Barthélemy Antoine-Loeff s’impose comme un paradoxe esthétique et philosophique. Le spectateur se trouve face à un événement inconcevable, réduit à la taille d’un point noir irradiant une lumière rouge incandescente.</p>
                                            <span class="accordion-content-footer">Barthélemy Antoine-Lœff</span>
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
                                                <p class="header-accordion-text">Modus Tollens
                                                </p>
                                                <div class="mt-2">
                                                    <span class="header-accordion-footer">Méca</span>
                                                </div>
                                            </div>
                                            <div class="header-accordion-time">
                                                <p class="header-accordion-time-text">15h<br>
                                                    I<br>
                                                    18h</p>
                                            </div>
                                        </div>
                                        <div class="accordion-content">
                                            <img src="assets/media/img/modus-tollens.svg">
                                            <span class="accordion-content-title">Modus Tollens</span>
                                            <p>Rassemblés autour de l’histoire d’Audrey Batonneau, ancienne chargée de recherche en nanobiotechnologie, les chercheuses et chercheurs de l’Unité de Recherche numérique ont souhaité regrouper un ensemble de propositions en résonance avec son expérience et sa vision singulière du monde, dans un rapport paradoxal à la vérité au sein d’une société de l’hyper-information digitalisée.</p>
                                            <span class="accordion-content-footer">ENSBA Lyon - ESAD Saint-Étienne</span>
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
                                                <p class="header-accordion-text">Somaticae<br>Zoë Mc Pherson, <br>Ossia, Warzou</p>
                                                <div class="mt-2">
                                                    <span class="header-accordion-footer">Méca</span>
                                                </div>
                                            </div>
                                            <div class="header-accordion-time">
                                                <p class="header-accordion-time-text">21h30<br>
                                                    I<br>
                                                    02h</p>
                                            </div>
                                        </div>
                                        <div class="accordion-content">
                                            <img src="assets/media/img/somaticae.svg">
                                            <span class="accordion-content-title">Somaticae</span>
                                            <p>Auteurs de nombreux enregistrements flirtant avec de la techno aventureuse et une approche résolument bruitiste, Somaticae joue généralement au milieu des gens pour des sets aux constructions percutantes, voire abrasives.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="tabs-3" class="container-fluid">
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
                                                <p class="header-accordion-text">Nil<br>
                                                    Messenger<br>
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
                                            <img src="assets/media/img/nil.svg">
                                            <span class="accordion-content-title">Nil</span>
                                            <p>Nil, un jeu de puzzle basé sur le concept d’illusion et créé par l’artiste et designer suisse Nadya Suvorora. En jouant avec l’inclinaison de l’appareil, l’utilisateur doit reconnecter les différents canaux pour pouvoir évoluer dans de véritables paysages martiens. </p>
                                            <span class="accordion-content-footer">Nadya Suvorova</span>
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
                                                <p class="header-accordion-text">Eclipse
                                                </p>
                                                <div class="mt-2">
                                                    <span class="header-accordion-footer">Méca</span>
                                                </div>
                                            </div>
                                            <div class="header-accordion-time">
                                                <p class="header-accordion-time-text">10h<br>
                                                    I<br>
                                                    13h</p>
                                            </div>
                                        </div>
                                        <div class="accordion-content">
                                            <img src="assets/media/img/eclipse.svg">
                                            <span class="accordion-content-title">Eclipse</span>
                                            <p>Jouant sur les deux registres, du pseudo-scientifique et de l’imaginaire, les étudiants de l’ESAA La Martinière Diderot explorent dans un dispositif lumineux, fragile et instable, le fantasme extra-terrestre ou l’angoisse d’être seul au monde dans l’obscurité infinie de l’univers.</p>
                                            <span class="accordion-content-footer">DSAA Design graphique - ESAA La Martinière Diderot</span>
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
                                                <p class="header-accordion-text">Quantum</p>
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
                                            <img src="assets/media/img/quantum.svg">
                                            <span class="accordion-content-title">Quantum</span>
                                            <p>Quantum est un voyage musical en réalité virtuelle. Au fil de la musique, le spectateur explore différents environnements surréalistes à travers l’oeil d’un corps humain virtuel.</p>
                                            <span class="accordion-content-footer">Kylan Luginbühl</span>
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
                                                <span class="header-accordion-title">Soirée de performances</span>
                                                <img class="header-accordion-icon" src="assets/icons/arrow-down.svg">
                                                <p class="header-accordion-text">MA</p>
                                                <div class="mt-2">
                                                    <span class="header-accordion-footer">Méca</span>
                                                </div>
                                            </div>
                                            <div class="header-accordion-time">
                                                <p class="header-accordion-time-text">21h30<br>
                                                    I<br>
                                                    02h</p>
                                            </div>
                                        </div>
                                        <div class="accordion-content">
                                            <img src="assets/media/img/ma.svg">
                                            <span class="accordion-content-title">MA</span>
                                            <p>MA est une performance cinétique sonore et lumineuse, chorégraphiée par un ballet de projecteurs. Avec ce dispositif mécanique et futuriste, l’artiste nous propose de vivre une expérience sensorielle unique dont la réalité n’est qu’une représentation arbitraire et personnelle du vide, de la lumière et des stimuli. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="tabs-4" class="container-fluid">
            <div class="timeline">
                <div class="timeline__wrap">
                    <div class="timeline__items">
                        <div class="timeline__item no-enfant">
                            <div class="timeline__content">
                                <div id="accordion">
                                    <div class="group">
                                        <div class="header-accordion row">
                                            <div class="header-accordion-content col-10">
                                                <span class="header-accordion-title">Réalité virtuelle</span>
                                                <img class="header-accordion-icon" src="assets/icons/arrow-down.svg">
                                                <p class="header-accordion-text">Nachtspiel</p>
                                                <div class="mt-2">
                                                    <span class="header-accordion-footer">Musée mer marine</span>
                                                </div>
                                            </div>
                                            <div class="header-accordion-time">
                                                <p class="header-accordion-time-text">10h30<br>
                                                    I<br>
                                                    13h</p>
                                            </div>
                                        </div>
                                        <div class="accordion-content">
                                            <img src="assets/media/img/nachtspiel.svg">
                                            <span class="accordion-content-title">Nachtspiel</span>
                                            <p>Nachtspiel est un court métrage expérimental visant à explorer les possibilités spatiales de l’image et du son dans un film en réalité virtuelle. Des fusibles et des effets de feu rencontrent les sons et les rythmes du musicien et compositeur Fritz Hauser.</p>
                                            <span class="accordion-content-footer">Robert Müller - Christophe Merkle</span>
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
                                                <p class="header-accordion-text">Spectacle MiniMax</p>
                                                <div class="mt-2">
                                                    <span class="header-accordion-footer">Musée mer marine</span>
                                                </div>
                                            </div>
                                            <div class="header-accordion-time">
                                                <p class="header-accordion-time-text">10h<br>
                                                    I<br>
                                                    13h</p>
                                            </div>
                                        </div>
                                        <div class="accordion-content">
                                            <img src="assets/media/img/minimax.svg">
                                            <span class="accordion-content-title">Spectacle MiniMax</span>
                                            <p>On découvre notre monde en 2103 : un système social et un régime politique fonctionnant par loterie, dans lequel perdurent pourtant inégalités, jeux de dupes et manipulations. Dans cette société entièrement soumise au hasard et régie par le “principe du minimax” ; chacun cherche à établir la meilleure stratégie possible pour se maintenir dans le système.</p>
                                            <span class="accordion-content-footer">Mathilde Gentil - GOSH Cie</span>
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
                                                <span class="header-accordion-title">Cosmogonie</span>
                                                <img class="header-accordion-icon" src="assets/icons/arrow-down.svg">
                                                <p class="header-accordion-text">Displuvium<br />
                                                    Planet<br />
                                                    Sphère
                                                </p>
                                                <div class="mt-2">
                                                    <span class="header-accordion-footer">Méca</span>
                                                </div>
                                            </div>
                                            <div class="header-accordion-time">
                                                <p class="header-accordion-time-text">15h30<br>
                                                    I<br>
                                                    18h</p>
                                            </div>
                                        </div>
                                        <div class="accordion-content">
                                            <img src="assets/media/img/displuvium.svg">
                                            <span class="accordion-content-title">Displuvium</span>
                                            <p>Displuvium est une installation qui interroge le désir de contrôle de l’humain sur son environnement naturel, en particulier sur les phénomènes météorologiques.</p>
                                            <span class="accordion-content-footer">Fragmentin</span>
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
                                                    <span class="header-accordion-footer">Méca</span>
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
                                                <p class="header-accordion-text">Somaticae<br>Zoë Mc Pherson, <br>Ossia, Warzou</p>
                                                <div class="mt-2">
                                                    <span class="header-accordion-footer">Méca</span>
                                                </div>
                                            </div>
                                            <div class="header-accordion-time">
                                                <p class="header-accordion-time-text">21h30<br>
                                                    I<br>
                                                    02h</p>
                                            </div>
                                        </div>
                                        <div class="accordion-content">
                                            <img src="assets/media/img/somaticae.svg">
                                            <span class="accordion-content-title">Somaticae</span>
                                            <p>Auteurs de nombreux enregistrements flirtant avec de la techno aventureuse et une approche résolument bruitiste, Somaticae joue généralement au milieu des gens pour des sets aux constructions percutantes, voire abrasives.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="tabs-5" class="container-fluid">
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
                                                <p class="header-accordion-text">Messenger<br>
                                                    Soleil Noir<br>
                                                    Hydrogeny
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
                                            <img src="assets/media/img/messenger.svg">
                                            <span class="accordion-content-title">Messenger</span>
                                            <p>The discs are read arbitrarily as they rotate: the stars (embodied by magnets) are detected when they pass under a magnetic sensor arm that transmits the sound data to an analogue synthesiser whose height is linked to the position of the magnets on the radius of the disk. </p>
                                            <span class="accordion-content-footer">Flavien Théry</span>
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
                                                <p class="header-accordion-text">Atelier vidéo et cratères d'impact
                                                </p>
                                                <div class="mt-2">
                                                    <span class="header-accordion-footer">Musée mer marine</span>
                                                </div>
                                            </div>
                                            <div class="header-accordion-time">
                                                <p class="header-accordion-time-text">10h<br>
                                                    I<br>
                                                    13h</p>
                                            </div>
                                        </div>
                                        <div class="accordion-content">
                                            <img src="assets/media/img/impact.svg">
                                            <span class="accordion-content-title">Atelier vidéo</span>
                                            <p>À partir d’une expérience scientifique, venez réfléchir au rôle des ballets de comètes et des planètes tout en vous initiant à la captation vidéo en temps réel et au Vjing.</p>
                                            <span class="accordion-content-footer">AADN – Arts et Cultures Numériques</span>
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
                                                <p class="header-accordion-text">Fluido.obj</p>
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
                                            <img src="assets/media/img/fluido.svg">
                                            <span class="accordion-content-title">Fluido.obj</span>
                                            <p>Fluido.obj est une expérience de réalité virtuelle immersive qui invite à flotter au-dessus de paysages émotionnels : une plage au fond de l’océan, un tunnel électrique qui tourne et brille, ou une forêt de champignons surréaliste.</p>
                                            <span class="accordion-content-footer">Joaquina Salgado</span>
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
                                                <p class="header-accordion-text">Spectacle MiniMax</p>
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
                                            <img src="assets/media/img/minimax.svg">
                                            <span class="accordion-content-title">Spectacle MiniMax</span>
                                            <p>On découvre notre monde en 2103 : un système social et un régime politique fonctionnant par loterie, dans lequel perdurent pourtant inégalités, jeux de dupes et manipulations. Dans cette société entièrement soumise au hasard et régie par le “principe du minimax” ; chacun cherche à établir la meilleure stratégie possible pour se maintenir dans le système.</p>
                                            <span class="accordion-content-footer">Mathilde Gentil - GOSH Cie</span>
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