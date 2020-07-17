<!DOCTYPE html>
<html>
    <head></head>
        <body>
            <div class="menu">
                <?php  include "menu.php" ?>
            </div>

            <h1>Page d'accueil</h1>

            <p>
                <?php
                    include "variables.php";
                    echo $promotions;
                ?>
            </p>

</body>
</html>