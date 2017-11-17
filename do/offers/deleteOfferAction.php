<?php

require ('models/offers.php');
$id=$_GET['id'];
deleteOffer($bdd,$id);

$_SESSION['flash'] = '<h1>Offer '.$id.' succesfully deleted !</h1>';

header('Location:/'.$project_name.'/index.php?offer=list');

