<?php

require ('models/users.php');
$id=$_POST['id'];
$l=$_POST["login"];
$sk=$_POST["skills"];
$c=$_POST["credit"];
//Fonction createUser() exécute la requête !
editUser($bdd,$id,$l,$c,$sk);

$_SESSION['flash'] = '<h1>User '.$_POST['login'].' édité avec succès !</h1>';

header('Location:/'.$project_name.'/index.php?user=list');
