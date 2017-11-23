<?php

$amount = sanitizeText($_POST['amount']);
$transferDate = $_POST['transferDate'];
$transactionType = sanitizeNumber($_POST['transactionType']);
$comment = sanitizeText($_POST['comment']);
$id_sender = sanitizeNumber($_POST['id_sender']);
$id_receveur = sanitizeNumber($_POST['id_receveur']);

//Fonction createTransaction() exécute la requête !
createTransaction($bdd, $amount, $transfertDate, $transactionType, $comment, $id_sender, $id_receveur);

$_SESSION['flash'] = '<h1>Transaction '.$_POST['comment'].' créé avec succès !</h1>';

header('Location:/'.$project_path.'/index.php?transaction=list');



