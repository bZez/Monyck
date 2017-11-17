<?php

require('models/transactions.php');

$amount = $_POST['amount'];
$transferDate = $_POST['transferDate'];
$transactionType = $_POST['transactionType'];
$comment = $_POST['comment'];
$id_sender = $_POST['id_sender'];
$id_receveur = $_POST['id_receveur'];

//Fonction createTransaction() exécute la requête !
createTransaction($bdd, $amount, $transfertDate, $transactionType, $comment, $id_sender, $id_receveur);

$_SESSION['flash'] = '<h1>Transaction '.$_POST['comment'].' créé avec succès !</h1>';

header('Location:/'.$project_name.'/index.php?transaction=list');



