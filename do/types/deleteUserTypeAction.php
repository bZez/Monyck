<?php

require ('models/users.php');
$id=$_POST['id'];
deleteUserType($bdd,$id);

$_SESSION['flash'] = '<h1>User '.$_POST['login'].' supprimé avec succès !</h1>';

header('Location:/'.$project_name.'/index.php?type=list');

