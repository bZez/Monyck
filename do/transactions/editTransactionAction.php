<?php

require ('models/transactions.php');
$id=$_POST['id'];
$amount = $_POST['amount'];
$transferDate = $_POST['transferDate'];
$transactionType = $_POST['transactionType'];
$comment = $_POST['comment'];
$id_sender = $_POST['id_sender'];
$id_receiver = $_POST['id_receveur'];


//Fonction editTransaction() exécute la requête !
editTransaction($bdd, $id, $amount, $transferDate, $transactionType, $comment, $id_sender, $id_receiver);

$_SESSION['flash'] = '<h1>Transaction successfully edited !</h1>';

header('Location:/'.$project_name.'/index.php?transaction=list');


