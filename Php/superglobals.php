<!DOCTYPE html>
    <html>
        <head></head>
        <body>
        <?php
            $x = 5 ;
            $y = 18 ;

            function maFonction(){
                echo $GLOBALS['x'];
            }
            maFonction();

            echo $_SERVER["SERVER_NAME"];

        ?>
        </body>
    </html>