<?php

$id=sanitizeNumber($_POST['id']);
$am=sanitizeNumber($_POST["amount"]);
$ex=$_POST["execTime"];
$in=sanitizeNumber($_POST["insurance"]);
$ids=sanitizeNumber($_POST["status"]);

echo $id,$am,$ex,$in,$ids;

//Fonction createUser() exécute la requête !
updateOffer($bdd, $id, $am, $ex, $in, $ids);

$_SESSION['flash'] = '<h1>Offer '.$id.' successfully edited !</h1>';

header('Location:/'.$project_path.'/index.php?offer=list');
