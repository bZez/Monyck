<?php
$id=sanitizeNumber($_POST['id']);
$l=sanitizeText($_POST["login"]);
$fn=sanitizeText($_POST["fname"]);
$ln=sanitizeText($_POST["lname"]);
$bd=$_POST["bdate"];
$m=sanitizeText($_POST["mail"]);
$pw=$_POST["pw"];

//Fonction createUser() exécute la requête !
editUser($bdd,$id,$l);

$_SESSION['flash'] = '<h1>User '.$_POST['login'].' édité avec succès !</h1>';

header('Location:/'.$project_path.'/index.php?user=list');
