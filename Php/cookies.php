<?php
    setcookie("nom", "John", time() + 3600*24*30);
?>

<!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <title>$Title$</title>
        </head>
        <body>
        <?php
            if (isset($_COOKIE['nom'])){
                echo "<h1>Hello ".$_COOKIE['nom']. "</h1>";
            }
            else {
                echo "<h1> je ne te connais pas </h1>";
            }
        ?>
        </body>
    </html>

