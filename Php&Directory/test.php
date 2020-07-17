<?php

    try{
        $database = new PDO('mysql:host=localhost;dbname=store','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
    catch (Exception $e){
        die('ERROR :'.$e->getMessage());
    }

    $first='Johny';
    $last='Halliday';

    $sql = $database->prepare('INSERT INTO customers(first_name, last_name) VALUES (?,?)');

    $sql -> execute(array($first,$last));

?>