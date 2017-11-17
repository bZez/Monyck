<?php

require('models/offers.php');
$am = $_POST["amount"];
$ex = $_POST["execTime"];
$in = $_POST["insurance"];
$idt = $_POST["id_ticket"];
$iuo = $_SESSION['id'];
$ids = 1; //Set 'OPEN' status

createOffer($bdd,$am,$ex,$in,$idt,$iuo,$ids);

$_SESSION['flash'] = '<h1>Offer of'.$am.' succesfully added !</h1>';

header('Location:/'.$project_name.'/index.php?offer=list');
