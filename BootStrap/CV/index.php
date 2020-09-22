<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viexport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>CV - John</title>
</head>
<body>
    <section id="about" class="container-fluid" >
        <div class="col-xs-8 col-md-4 profile-picture">
            <img src="image/me.jpg" alt="John" class="rounded-circle">
        </div>
        <div class="heading">
            <h1> Hello, c'est moi John</h1>
            <h3>Développeur Web</h3>
            <a href="docs/cv.pdf" class="button1">Télécharger CV</a>
        </div>
    </section>

    <section id="skills" class="container">
        <div class="red-divider"></div>
        <div class="heading">
            <h2>Compétences</h2>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width:85%">
                            <h5>HTML 85%</h5>
                        </div>
                    </div><!--
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width:85%">
                            <h5>CSS 85%</h5>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%">
                            <h5>JavaScript 90%</h5>
                        </div>
                    </div>-->
                </div>
                    <div class="col-md-6">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width:85%">
                                <h5>Jquery 85%</h5>
                            </div>
                        </div><!--
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width:85%">
                                <h5>BootStrap 85%</h5>
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width:75%">
                                <h5>Angular 75%</h5>
                            </div>
                        </div>-->
                    </div>
                </div>
            </div>
    </section>

    <section id="experience">
        <div class="container">
            <div class="white-divider"></div>
            <div class="heading">
                <h2>Expériences professionelle</h2>
            </div>
            <ul class="timeline">
                <li>
                    <div class="timeline-badge"><span class="glyphicon glyphicon-briefcase"></span></div>
                    <div class="timeline-panel-container">
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h3>Google</h3>
                                <h4>Développeur Web Senior</h4>
                                <p class="text-mute"><small class="glyphicon glyphicon-time"> 2013-2015</small></p>
                            </div>
                            <div class="timeline-body">
                                <p>Ajout de la possibilité d'écouter une traduction dans Google Translate</p>
                                <p>Développement de Google Suggest en mode Offline</p>
                                <p>Nouveau design du player de Youtube adapté au mobile</p>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-badge"><span class="glyphicon glyphicon-briefcase"></span></div>
                    <div class="timeline-panel-container-inverted">
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h3>Facebook</h3>
                                <h4>Développeur Web</h4>
                                <p class="text-mute"><small class="glyphicon glyphicon-time"> 2010-2013</small></p>
                            </div>
                            <div class="timeline-body">
                                <p>Développement du bouton Share pour les applis Web mobile</p>
                                <p>Lancement automatique des vidéos en mode mute depuis la Timeline</p>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-badge"><span class="glyphicon glyphicon-briefcase"></span></div>
                    <div class="timeline-panel-container">
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h3>Twitter</h3>
                                <h4>Développeur Web Junior</h4>
                                <p class="text-mute"><small class="glyphicon glyphicon-time"> 2007-2010</small></p>
                            </div>
                            <div class="timeline-body">
                                <p>Création et Développement du Retweet pour l'appli Web</p>
                                <p>Intégration des vidéos sur les applis web mobile</p>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>

</body>
</html>