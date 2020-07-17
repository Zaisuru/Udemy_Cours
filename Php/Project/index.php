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
            <link rel="stylesheet" type="text/css" href="style/style.css">
            <title>Contactez - Moi</title>
        </head>
        <body>
            <div class="container">
                <div class="divider"></div>
                    <div class="heading">
                        <h2>contactez-moi</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-10 col-lg-offset-1">
                            <form id="contact-form" method="post" action="" role="form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="firstname">Prénom <span class="blue"> *</span></label>
                                        <input type="text" name="firstname" id="firstname" class="form-control" value="" placeholder="Votre Prénom">
                                        <p class="comment"></p>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="name">Nom <span class="blue"> *</span></label>
                                        <input type="text" name="name"  id="name" class="form-control" value=""  placeholder="Votre Nom">
                                        <p class="comment"></p>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="mail">Mail <span class="blue"> *</span></label>
                                        <input type="email" name="mail"  id="mail" class="form-control" value=""  placeholder="Votre Mail">
                                        <p class="comment"></p>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="phone">Téléphone</label>
                                        <input type="tel" name="phone"  id="phone" class="form-control" value=""  placeholder="Votre Téléphone" >
                                        <p class="comment"></p>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="msg">Message <span class="blue"> *</span></label>
                                        <textarea id="msg" name="message" class="form-control" value=""  placeholder="Votre Message" rows="4"></textarea>
                                        <p class="comment"></p>
                                    </div>
                                    <div class="col-md-12">
                                        <p class="blue"><strong>* Ces informations sont requises</strong></p>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="submit" class="button1" value="Envoyer">
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
            </div>
        </body>
    </html>

