<?php

require ('models/users.php');
$id=$_POST['id'];
$l=$_POST["login"];
$fn=$_POST["fname"];
$ln=$_POST["lname"];
$bd=$_POST["bdate"];
$m=$_POST["mail"];
$pw=$_POST["pw"];

//Fonction createUser() exécute la requête !
editUser($bdd,$id,$l);

$_SESSION['flash'] = '<h1>User '.$_POST['login'].' édité avec succès !</h1>';

header('Location:/'.$project_name.'/index.php?user=list');
