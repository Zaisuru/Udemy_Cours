<!DOCTYPE html>

<html lang='fr'>
    <head>
        <meta charset="utf-8">
        <link rel='stylesheet' href='Style.css'>
        <link href='http://fonts.googleapis.com/css?family=Crete+Round' rel='stylesheet'>
        <title>Travel Agency</title>
    </head>

    <body>
        <header>

                <div class='wrapper'>
                    <h1> Travel Agency<span class='Orange'>.</span></h1>
                    <nav>
                        <ul>
                            <li><a href="#main_image">Accueil</a></li>
                            <li><a href="#steps">Destinations</a></li>
                            <li><a href="#possibilities">Circuits</a></li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>
                    </nav>
                </div>
        </header>

            <section id='main_image'>
                <div class='wrapper'>
                    <h2> Organisez votre<br>
                        <strong>voyage sur mesure</strong>
                    </h2>
                    <a href="index2.html" class='button1'>Par ici</a>
                
                </div>
            </section>

            <section id='steps'>
                <div class='wrapper'>
                    <ul>
                        <li id='step1'>
                            <h4>Plannifier</h4>
                            <p>Confiez-vous vos rêves d'évasion, en famille ou entre amis, nous trouverons la formule qui comblera vos attentes</p>
                        </li>
                        <li id='step2'>
                            <h4>Organiser</h4>
                            <p>Bénéficiez de l'expertise de nos spécialises de chaque destination, ils vous accompagnent dans la réalisation de votre voyage</p>
                        </li>
                        <li id='step3'>
                            <h4>Voyager</h4>
                            <p>Nous nous chargeons d'assurer votre sécurité et de veiller à votre pleine sérénité tout au long de votre voyage</p>
                        </li>
                    </ul>
                
                </div>
                <div class='clear'></div>
            </section>

            <section id='possibilities'>
                <div class='wrapper'>
                    <article style="background-image: url(Image/article-image-1.jpg);">
                        <div class='overlay'>
                            <h4> Partez en famille</h4>
                            <p> <small>Offrez le meilleur à ceux que vous aimez et partagez des moments fabuleux</small></p>
                            <a href="#" class='button2'>Plus d'infos</a>
                        </div>
                    </article>
                    <article style="background-image: url(Image/article-image-2.jpg);">
                        <div class='overlay'>
                            <h4>Envie de s'évarder</h4>
                            <p> <small>Parfois un peu d'évasion serai la bienvenue et ferai le plus grand bien</small></p>
                            <a href="#" class='button2'>Plus d'infos</a>
                        </div>
                        
                    </article>
                </div>
                
                <div class='clear'></div>
            </section>

            <section id='contact'>
                <div class='wrapper'>
                    <h3>Contactez-nous</h3>
                    <p>Chez Travel Agency nous savons que voyager est une aventure humaine mais également un engagement financier important pour vous.
                         C'est pourquoi nous mettons un point d'honneur à prendre en compte chacune de vos attentes pour vous aider dans la préparation de votre séjour, circuit ou voyage sur mesure</p>
                    <form>
                        <label for='name'>Nom</label>
                        <input type='text' id='name' placeholder="Votre Nom">
                        <label for='mail'>Email</label>
                        <input type='text' id='mail' placeholder="Votre email">
                        <input type='submit' value='OK' class='button3'>
                    </form>
                
                </div>
            </section>

        <footer>
            <div class="wrapper">
                <h1>Travel Agency<span class='Orange'>.</span></h1>
                <div class='Copyright'>Copyright © 2019. Tous droits réservés </div>
            </div>

        </footer>
    </body>
    
</html>