<?php

require ('models/offers.php');
$id=$_POST['id'];
$am=$_POST["amount"];
$ex=$_POST["execTime"];
$in=$_POST["insurance"];
$ids=$_POST["status"];

echo $id,$am,$ex,$in,$ids;

//Fonction createUser() exécute la requête !
updateOffer($bdd, $id, $am, $ex, $in, $ids);

$_SESSION['flash'] = '<h1>Offer '.$id.' successfully edited !</h1>';

header('Location:/'.$project_path.'/index.php?offer=list');
