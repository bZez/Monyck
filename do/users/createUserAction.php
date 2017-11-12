<?php

require ('models/users.php');
$l=$_POST["login"];
$fn=$_POST["firstname"];
$ln=$_POST["lastname"];
$sk=$_POST["skills"];
$m=$_POST["email"];
$pw=$_POST["password"];
//Fonction createUser() exécute la requête !
createUser($bdd,$l,$fn,$ln,$sk,$m,$pw);

$_SESSION['flash'] = '<h1>User '.$_POST['login'].' créé avec succès !</h1>';

header('Location:/'.$project_name.'/index.php?user=list');
