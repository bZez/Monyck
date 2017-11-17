<?php

require ('models/users.php');
$id=$_GET['id'];
deleteUserType($bdd,$id);

$_SESSION['flash'] = '<h1>Usertype deleted !</h1>';

header('Location:/'.$project_name.'/index.php?type=list');

