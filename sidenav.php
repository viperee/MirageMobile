<div id="sidenav" class="background-noir">
    <div id="sidenav-content" class="row">
        <div class="col-8 sidenav-background pt-5">
            <div class=offset-1><a href="index.php"><img class="logo" src="assets/media/img/logo.png" alt="Logo"></a>
            </div>
        </div>
        <div id="menu" class="col-4">
            <div class="row">
                <div id="close-wrapper">
                    <span id="close-sidenav-btn"><img class="close" src="assets/icons/cancel.svg"></span>
                </div>
            </div>
            <div id="sidenav-menu" class="row">
                <div class="col-12">
                    <button class="btn-with-icon btn-icon-ticket background-white">
                        <img src="assets/icons/ticket.svg" alt="Menu"><span>Billeterie</span>
                    </button>
                </div>
                <div class="col-12">
                    <ul>
                        <?php
                        switch ($page) {
                            case "index":
                                echo "<li><a class=\"sidenav-link sidenav-link-active\" href=\"index.php\">Accueil</a></li>";
                                echo "<li><a class=\"sidenav-link\" href=\"festival.php\">Le Festival</a></li>";
                                echo "<li><a class=\"sidenav-link\" href=\"experience.php\">Expérience</a></li>";
                                echo "<li><a class=\"sidenav-link\" href=\"programmation.php\">Programmation</a></li>";
                                echo "<li><a class=\"sidenav-link\" href=\"infos-pratiques.php\">Infos Pratiques</a></li>";
                                break;
                            case "festival":
                                echo "<li><a class=\"sidenav-link\" href=\"index.php\">Accueil</a></li>";
                                echo "<li><a class=\"sidenav-link sidenav-link-active\" href=\"festival.php\">Le Festival</a></li>";
                                echo "<li><a class=\"sidenav-link\" href=\"experience.php\">Expérience</a></li>";
                                echo "<li><a class=\"sidenav-link\" href=\"programmation.php\">Programmation</a></li>";
                                echo "<li><a class=\"sidenav-link\" href=\"infos-pratiques.php\">Infos Pratiques</a></li>";
                                break;
                            case "experience":
                                echo "<li><a class=\"sidenav-link\" href=\"index.php\">Accueil</a></li>";
                                echo "<li><a class=\"sidenav-link\" href=\"festival.php\">Le Festival</a></li>";
                                echo "<li><a class=\"sidenav-link sidenav-link-active\" href=\"experience.php\">Expérience</a></li>";
                                echo "<li><a class=\"sidenav-link\" href=\"programmation.php\">Programmation</a></li>";
                                echo "<li><a class=\"sidenav-link\" href=\"infos-pratiques.php\">Infos Pratiques</a></li>";
                                break;
                            case "programmation":
                                echo "<li><a class=\"sidenav-link\" href=\"index.php\">Accueil</a></li>";
                                echo "<li><a class=\"sidenav-link\" href=\"festival.php\">Le Festival</a></li>";
                                echo "<li><a class=\"sidenav-link\" href=\"experience.php\">Expérience</a></li>";
                                echo "<li><a class=\"sidenav-link sidenav-link-active\" href=\"programmation.php\">Programmation</a></li>";
                                echo "<li><a class=\"sidenav-link\" href=\"infos-pratiques.php\">Infos Pratiques</a></li>";
                                break;
                            case "infos-pratiques":
                                echo "<li><a class=\"sidenav-link\" href=\"index.php\">Accueil</a></li>";
                                echo "<li><a class=\"sidenav-link\" href=\"festival.php\">Le Festival</a></li>";
                                echo "<li><a class=\"sidenav-link\" href=\"experience.php\">Expérience</a></li>";
                                echo "<li><a class=\"sidenav-link\" href=\"programmation.php\">Programmation</a></li>";
                                echo "<li><a class=\"sidenav-link sidenav-link-active\" href=\"infos-pratiques.php\">Infos Pratiques</a></li>";
                                break;
                        }
                        ?>
                    </ul>
                </div>
                <div class="col-12">
                    <div id="sidenav-social-network">
                        <span><img src="assets/icons/facebook-white.svg" alt="Facebook"></span>
                        <span><img src="assets/icons/twitter-white.svg" alt="Twitter"></span>
                        <span><img src="assets/icons/instagram-white.svg" alt="Instagram"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>