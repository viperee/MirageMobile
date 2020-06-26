<div id="sidenav" class="pt-5 background-noir">
    <div id="sidenav-content" class="row">
        <div class="col-1 offset-1">
            <a href="index.php"><img class="logo" src="assets/media/img/logo.png" alt="Logo"></a>
        </div>
        <div id="close-sidenav-btn" class="col-2 offset-7">
            <img class="close" src="assets/icons/cancel.svg">
        </div>
    </div>

        <div class="col-12 pt-5">
            <div id="menu" >
                
                <div id="sidenav-menu" class="row">
                    <div class="col-12">
                    <a href="https://www.weezevent.com/mirage-festival-2" target="_blank"><button class="btn-with-icon btn-icon-ticket background-white"><img src="assets/icons/ticket-black.svg" alt="Menu"><span>Billeterie</span></button></a>
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
                                default:
                                    echo "<li><a class=\"sidenav-link\" href=\"index.php\">Accueil</a></li>";
                                    echo "<li><a class=\"sidenav-link\" href=\"festival.php\">Le Festival</a></li>";
                                    echo "<li><a class=\"sidenav-link\" href=\"experience.php\">Expérience</a></li>";
                                    echo "<li><a class=\"sidenav-link\" href=\"programmation.php\">Programmation</a></li>";
                                    echo "<li><a class=\"sidenav-link\" href=\"infos-pratiques.php\">Infos Pratiques</a></li>";
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
</div>