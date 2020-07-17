<?php
session_start();
?>

<!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <title>$Title$</title>
        </head>
        <body>
            <p>Hello ton nom c'est
            <?php
                echo $_SESSION['nom'];
            ?>
            </p>
        </body>
    </html>

