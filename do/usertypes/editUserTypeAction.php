<?php

require ('models/users.php');
$id=$_POST['id'];
$t=$_POST['type'];

//Fonction createUser() exécute la requête !
editUserType($bdd,$id,$t);

$_SESSION['flash'] = '<h1>Usertype '.$_POST['type'].' édité avec succès !</h1>';

header('Location:/'.$project_path.'/index.php?type=list');
