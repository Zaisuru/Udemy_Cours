<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style/style.css">
        <!-- JQUERY Download -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- BOOTSTRAP Download -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link href="http://fonts.googleapis.com/css?family=Holtwood+One+SC" rel="stylesheet" type="text/css">
        <title>Burger Code</title>
    </head>
    <body>
        <div class="container site">
            <h1 class="text-logo"><span class="glyphicon glyphicon-cutlery" ></span> Burger Code <span class="glyphicon glyphicon-cutlery"></span></h1>

            <nav>
                <ul class="nav nav-pills">
                    <li role="presentation" class="active"><a href="#1" data-toogle="tab">Menu</a></li>
                    <li role="presentation" ><a href="#2" data-toogle="tab">Burgers</a></li>
                    <li role="presentation" ><a href="#3" data-toogle="tab">Snacks</a></li>
                    <li role="presentation" ><a href="#4" data-toogle="tab">Salades</a></li>
                    <li role="presentation" ><a href="#5" data-toogle="tab">Boissons</a></li>
                    <li role="presentation" ><a href="#6" data-toogle="tab">Desserts</a></li>
                </ul>
            </nav>
            <div class="tab-content">
                <div class="tab-pane active" id="1">
                    <div class="row">
                        <div class="col-sm-6 col-md-4">
                            <div class="thumbnail">
                                <img src="images/m1.png" alt="...">
                                <div class="price">8.90 €</div>
                                <div class="caption">
                                    <h4>Menu Classic</h4>
                                    <p>Sandwich : Burger, Salade, Tomate, Cornichon + Frites + Boissons</p>
                                    <a href="#" class="btn btn-order"><span class="glyphicon glyphicon-shopping-cart"></span>Commander</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="2">
                    <div class="row">
                        <div class="col-sm-6 col-md-4">
                            <div class="thumbnail">
                                <img src="images/b1.png" alt="...">
                                <div class="price">8.90 €</div>
                                <div class="caption">
                                    <h4>Burger Classic</h4>
                                    <p>Sandwich : Burger, Salade, Tomate, Cornichon + Frites + Boissons</p>
                                    <a href="#" class="btn btn-order"><span class="glyphicon glyphicon-shopping-cart"></span>Commander</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </body>
</html>

<?php
?>