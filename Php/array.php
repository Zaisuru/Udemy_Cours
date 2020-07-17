<?php

   /* $JourDeLaSemaine = array ("Lundi" , "Mardi" , "Mercredi" , "Jeudi" , "Vendredi" , "Samedi" , "Dimanche");

    for ( $i = 0 ; $i <= count($JourDeLaSemaine); $i++)
    {
        echo "$JourDeLaSemaine[$i] <br>";
    }
   */


    $Personnes = array("Pierre" => 30 , "Paul" => 40 , "Jack" => 50);

    foreach ($Personnes as $key => $value){
        echo"$key a $value ans <br>";
    }

?>