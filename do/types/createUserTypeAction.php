<?php

require ('models/users.php');
$t=$_POST['type'];

//Fonction createUser() exécute la requête !
createUserType($bdd,$t);
echo $t;

$_SESSION['flash'] = '<h1>Usertype '.$_POST['type'].' created with succes !</h1>';

header('Location:/'.$project_name.'/index.php?type=list');