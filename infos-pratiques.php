<!DOCTYPE html>
<html lang="fr-FR">
<?php $page = 'infos-pratiques'; ?>
<head>
    <title>Infos Pratiques</title>
    <?php include("head.php"); ?>
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
    <link rel="stylesheet" type="text/css" href="assets/css/infos-pratiques.css">
</head>
<body class="no-margin">
<?php include("header.php"); ?>


<main>
    <div class="row">
        <div class="offset-2">
            <h4 class="color-white">Infos Pratiques</h4>
        </div>
    </div>
    <div id="tabs" class="background-solitude">
        <div class="container-fluid">
            <div class="row">
                <div class="col text-center">
                    <ul class="no-padding">
                        <li class="pr-3">
                            <a href="https://www.weezevent.com/mirage-festival-2" target="_blank"><button class="btn-with-icon btn-icon-ticket background-white"><img src="assets/icons/ticket-black.svg" alt="Billeterie"></button></a>

                        </li>
                        <li class="pr-3">
                            <button id="btn-trajet" class="btn-active">
                                <img src="assets/icons/trajet.svg"
                                     alt="Menu">
                            </button>
                        </li>
                        <li class="pr-3">
                            <button id="btn-sur-place" class="btn">
                                <img src="assets/icons/sur-place-black.svg"
                                     alt="Menu">
                            </button>
                        </li>
                        <li class="pr-3">
                            <button id="btn-hebergement" class="btn">
                                <img src="assets/icons/hebergement-black.svg"
                                     alt="Menu">
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="tabs-container" class="background-solitude">
            <div id="tabs-trajet" class="container-fluid">
                <div class="block-accordeon mb-4 container background-white">
                    <div class="row titre-accordeon-wrapper">
                        <div class="col-9">
                            <p class="titre-accordeon">En voiture</p>
                        </div>
                        <div class="offset-2 margin-vertical-center">
                            <img class="titre-accordeon-icon" src="assets/icons/arrow-down.svg">
                        </div>
                    </div>
                    <div class="content-accordeon">
                    <p class="sous-titre-accordeon">A l'aller</p>
                        <p class="texte-accordeon">Afin de garantir la meilleure fluidité de trafic, merci de vous 
                        conformer aux indications et à la signalisation mise en place.
                        
                        Bordeaux est facilement accessible aux automobilistes, notamment grâce au noeud 
                        d’interconnexion autoroutier A10 / A 62 / A63/ A89/A65.
                        </p>
                        <p class="sous-titre-accordeon">Parkings</p>
                        <p class="texte-accordeon">Des parkings sont mis à votre disposition à proximité du site 
                        du Festival. Ces parkings peuvent être fermés en cas d'intempéries. 
                        Des parkings de remplacement sont dès lors proposés en ville et dans ses alentours.<br><br>
                        </p>
                    </div>
                </div>
                <div class="block-accordeon mb-4 container background-white">
                    <div class="row titre-accordeon-wrapper">
                        <div class="col-9">
                            <p class="titre-accordeon">En covoiturage</p>
                        </div>
                        <div class="offset-2 margin-vertical-center">
                            <img class="titre-accordeon-icon" src="assets/icons/arrow-down.svg">
                        </div>
                    </div>
                    <div class="content-accordeon">
                        <p class="texte-accordeon">Vous avez prévu d’aller au Mirage Festival et vous avez des places
                            libres
                            dans votre voiture? Ou vous avez déjà acheté votre billet pour le
                            festival, mais vous ne savez pas comment vous y rendre ?
                        </p>
                        <p class="sous-titre-accordeon">La solution</p>
                        <p class="texte-accordeon">Covoiturez avec notre partenaire IDVroom, vous pourrez ainsi
                            rencontrer d’autres festivaliers et partager votre passion pour la
                            musique.<br><br>
                        </p>
                        <div class="text-center pb-3">
                            <a href="https://www.idvroom.com/" target="_blank"><button id="btn-covoiturer"><span>Covoiturer</span></button></a>
                        </div>
                    </div>
                </div>
                <div class="block-accordeon mb-4 container background-white">
                    <div class="row titre-accordeon-wrapper">
                        <div class="col-9">
                            <p class="titre-accordeon">En bus</p>
                        </div>
                        <div class="offset-2 margin-vertical-center">
                            <img class="titre-accordeon-icon" src="assets/icons/arrow-down.svg">
                        </div>
                    </div>
                    <div class="content-accordeon">
                        <p class="texte-accordeon">Rendez-vous au festival en bus grâce aux sites suivants :<br><br>
                            <a class="liens-habitants" href="https://www.flixbus.fr/" target="_blank">Flixbus</a><br>
                            <a class="liens-habitants" href="https://www.ouibus.com" target="_blank">Ouibus</a><br>
                            <a class="liens-habitants" href="https://www.eurolines.com" target="_blank">Eurolines</a><br><br>
                        </p>
                    </div>
                </div>
                <div class="block-accordeon mb-4 container background-white">
                    <div class="row titre-accordeon-wrapper">
                        <div class="col-9">
                            <p class="titre-accordeon">En train</p>
                        </div>
                        <div class="offset-2 margin-vertical-center">
                            <img class="titre-accordeon-icon" src="assets/icons/arrow-down.svg">
                        </div>
                    </div>
                    <div class="content-accordeon">
                    <p class="texte-accordeon">Rendez-vous au festival en train grâce aux sites suivants :<br><br>
                            <a class="liens-habitants" href="https://www.ouigo.com/" target="_blank">Ouigo</a><br>
                            <a class="liens-habitants" href="https://www.trainline.fr" target="_blank">Trainline</a><br><br>
                        </p>
                    </div>
                </div>
                <div class="block-accordeon mb-4 container background-white">
                    <div class="row titre-accordeon-wrapper">
                        <div class="col-9">
                            <p class="titre-accordeon">En tramway</p>
                        </div>
                        <div class="offset-2 margin-vertical-center">
                            <img class="titre-accordeon-icon" src="assets/icons/arrow-down.svg">
                        </div>
                    </div>
                    <div class="content-accordeon">
                        <p class="texte-accordeon">Le Mirage Festival investi Bordeaux, pour vous y retrouver dans la ville, aidez-vous du plan en ligne:<br /><br />
                        </p>
                        <div class="text-center pb-5">
                            <a href="https://www.infotbm.com/fr/plans/plan-dynamique/lines/" target="_blank"><button id="btn-covoiturer"><span>Plan en ligne</span></button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="tabs-sur-place" class="container-fluid">
                <div class="block-accordeon mb-4 container background-white">
                    <div class="row titre-accordeon-wrapper">
                        <div class="col-9">
                            <p class="titre-accordeon">Boissons & nourritures</p>
                        </div>
                        <div class="offset-2 margin-vertical-center">
                            <img class="titre-accordeon-icon" src="assets/icons/arrow-down.svg">
                        </div>
                    </div>
                    <div class="content-accordeon">
                        <p class="sous-titre-accordeon">Bars</p>
                        <p class="texte-accordeon">D'une programmation à l'autre, les bars se succèdent 
                        pour étancher toutes les soifs. Envie d’une bière spéciale? C’est du côté du quartier saint-michel
                        que ça se passe. D’une boisson rafraîchissante sans alcool? Le prochain bar sera le bon! 
                        D’une sélection de cépages? Les bars à vins sont là!<br><br>
                        </p>
                        <p class="sous-titre-accordeon">Restaurants</p>
                        <p class="texte-accordeon">D'une programmation à l'autre', les restaurants se succèdent 
                        pour restaurer tous les festivaliers. Envie d’une pizza? C’est du côté du quartier saint-michel
                        que ça se passe. D’un mets local? Le prochain bar sera le bon!<br><br><br>
                        </p>
                    </div>
                </div>
                <div class="block-accordeon mb-4 container background-white">
                    <div class="row titre-accordeon-wrapper">
                        <div class="col-9">
                            <p class="titre-accordeon">PMR/PSH & Handicap</p>
                        </div>
                        <div class="offset-2 margin-vertical-center">
                            <img class="titre-accordeon-icon" src="assets/icons/arrow-down.svg">
                        </div>
                    </div>
                    <div class="content-accordeon pb-5">
                        <p class="sous-titre-accordeon">Parking</p>
                        <p class="texte-accordeon">Une personne en situation de handicap peut stationner son véhicule dans le parking HANDICAP (partie du PARKING G), plein centre-ville et aménagé sur du plat, mais non goudronné. Son accès est autorisé aux véhicules munis d’un insigne « HANDICAP » ou d’un macaron spécial à demander à l’avance auprès de l’organisation du Festival.
                        </p>
                        <p class="sous-titre-accordeon">Accès au Festival et circulation à l’intérieur</p>
                        <p class="texte-accordeon">Les personnes accèdent à l’intérieur de l’enceinte du Festival par l’entrée principale (couloir de droite ABONNEMENT/HANDICAP).</p>
                        <p class="sous-titre-accordeon">Service de transport à tarif préférentiel</p>
                        <p class="texte-accordeon">Transport Handicap s’engage pour l’accès à la culture des personnes handicapées. A cet effet, il propose un service de transport avec des véhicules adaptés aux personnes à mobilité réduite, à tarif préférentiel (entre 20 et 40 euros, aller et retour, selon la distance).<br><br>
                            Cette offre est limitée à Bordeaux et uniquement sur réservation, au moins 24h à l’avance. Elle ne comprend pas le billet d’entrée au festival, qui doit être acheté séparément.<br><br></p>
                    </div>
                </div>
                <div class="block-accordeon mb-4 container background-white">
                    <div class="row titre-accordeon-wrapper">
                        <div class="col-9">
                            <p class="titre-accordeon">Bénévolat</p>
                        </div>
                        <div class="offset-2 margin-vertical-center">
                            <img class="titre-accordeon-icon" src="assets/icons/arrow-down.svg">
                        </div>
                    </div>
                    <div class="content-accordeon">
                        <p class="sous-titre-accordeon">Formulaire d’inscription bénévole</p>
                        <p class="texte-accordeon">La première édition du Mirage Festival à Bordeaux, rendez-vous des cultures numériques et de la création innovante, se tiendra du 08 au 12 juillet. Cette édition, autour de la thématique spatiale, explorera les nouvelles voies techniques, philosophiques et artistiques ouvertes par l’espace et ses mystères.<br><br>L’équipe du Mirage festival vous invite à la rejoindre en devenant bénévole pour des missions diverses : médiation des expositions, accueil du public, accueil des artistes et des intervenants, assistance technique, logistique générale, bar et catering. Vous pouvez également contacter Maude Poënsin, <a id="mailMirageFestival" href="mailto:maude@miragefestival.com"><u>maude@miragefestival.com</u></a>, pour plus de renseignements.<br><br>Nous serions ravis de vous accueillir parmi nous !</p>
                        <div class="text-center pb-5 pt-5">
                            <a href="https://justbndl.typeform.com/to/cqX5MR" target="_blank"><button id="btn-benevole"><span>Devenir bénévole</span></button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="tabs-hebergement" class="container-fluid">
                <div class="block-accordeon mb-4 container background-white">
                    <div class="row titre-accordeon-wrapper">
                        <div class="col-9">
                            <p class="titre-accordeon">Camping</p>
                        </div>
                        <div class="offset-2 margin-vertical-center">
                            <img class="titre-accordeon-icon" src="assets/icons/arrow-down.svg">
                        </div>
                    </div>
                    <div class="content-accordeon pb-5">
                        <p class="texte-accordeon">Pour vous renseigner sur les possibilités de logement de la région, 
                        consultez les sites suivants :<br><br>
                        <a class="liens-habitants" href="https://www.campingfrance.com/" target="_blank">Camping France</a><br>
                        <a class="liens-habitants" href="https://www.yellohvillage.fr/" target="_blank">Yelloh Village</a><br>
                        <a class="liens-habitants" href="https://www.maeva.com/fr-fr/" target="_blank">Maeva</a><br>
                        <a class="liens-habitants" href="https://www.homair.com/" target="_blank">Homair</a>
                        </p>
                    </div>
                </div>
                <div class="block-accordeon mb-4 container background-white">
                    <div class="row titre-accordeon-wrapper">
                        <div class="col-9">
                            <p class="titre-accordeon">Chez l’habitant</p>
                        </div>
                        <div class="offset-2 margin-vertical-center">
                            <img class="titre-accordeon-icon" src="assets/icons/arrow-down.svg">
                        </div>
                    </div>
                    <div class="content-accordeon pb-5">
                        <p class="texte-accordeon">Pour vous renseigner sur les possibilités de logement de la région, 
                        consultez les sites suivants :<br><br>
                        <a class="liens-habitants" href="https://www.airbnb.fr/" target="_blank">Airbnb</a><br>
                        <a class="liens-habitants" href="https://www.booking.com" target="_blank">Booking</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include("footer.php"); ?>

<!--IMPORTS JS-->
<?php include("script.php"); ?>
<script src="assets/js/infos-pratiques.js"></script>
<!--/IMPORTS JS-->

</body>
</html>