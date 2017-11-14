<?php

require ('models/users.php');
$id=$_POST['id'];
$l=$_POST["login"];
$fn=$_POST["fname"];
$ln=$_POST["lname"];
$bd=$_POST["bdate"];
$m=$_POST["mail"];
$pw=$_POST["pw"];
$tid= implode(" <br> ",$_POST['type']);
//Fonction createUser() exécute la requête !
editUser($bdd,$id,$l,$fn,$ln,$bd,$m,$pw);

$_SESSION['flash'] = '<h1>User '.$_POST['login'].' édité avec succès !</h1>';

header('Location:/'.$project_name.'/index.php?user=list');
