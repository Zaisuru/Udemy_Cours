<?php
$array = array("first" => "", "name" => "", "mail" => "", "phone" => "" , "msg" => "", "firstnameError" => "", "nameError" => "", "mailError" => "", "phoneError" => "" , "msgError" => "" ,"isSuccess" => false);
$emailTo = "thomas.holderbaum@gmail.com";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $array["first"] = verifyInput($_POST['first']);
    $array ["name"]= verifyInput($_POST['name']);
    $array ["mail"] = verifyInput($_POST['mail']);
    $array ["phone"] = verifyInput($_POST['phone']);
    $array ["msg"] = verifyInput($_POST['message']);
    $array ["isSuccess"] = true;
    $emailText = "";

    if(empty($array ["first"])){
        $array ["first"] = "Je veux connaître ton prénom !";
        $array ["isSuccess"] = false ;
    }
    else {
        $emailText .="FirstName : {$array["first"]}\n";
    }
    if(empty($array ["name"])){
        $array ["nameError"] = "Je veux connaître ton Nom aussi !";
        $array ["isSuccess"] = false ;
    }
    else {
        $emailText .="Name : {$array["name"]}";
    }
    if(empty($array ["msg"])){
        $array ["msgError"] = "aller laisse moi un petit message !";
        $array ["isSuccess"] = false ;
    }
    else {
        $emailText .="Message : {$array["msg"]}\n";
    }
    if(!isEmail($array ["mail"])){
        $array ["mailError"] = "et je fait comment pour t'envoyer mes dernières actualités";
        $array ["isSuccess"] = false ;
    }
    else {
        $emailText .="mail : {$array["mail"]}\n";
    }
    if(!isPhone($array ["phone"])){
        $array ["phoneError"] = "Il me faut ton numéro";
        $array ["isSuccess"] = false ;
    }
    else {
        $emailText .="phone : {$array["phone"]}\n";
    }
    if ($array ["isSuccess"]){
        $headers = "From: {$array["first"]} {$array["name"]} <{$array["mail"]}>\r\n Reply-To: {$array["mail"]}";
        mail($emailTo, "Un message de votre site", $emailText, $headers);
    }

    echo json_encode($array);
}
function isPhone ($var){
    return preg_match("/^[0-9]+$/", $var);
}
function isEmail ($var){
    return filter_var($var, FILTER_VALIDATE_EMAIL);
}

function verifyInput($var){
    $var = trim($var);
    $var = stripslashes($var);
    $var  = htmlspecialchars($var);

    return $var;
}
?>