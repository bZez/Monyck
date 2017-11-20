<?php

require ('models/transactions.php');
$id=$_GET['id'];
$tt=$_POST['type'];

deleteTransactionTypes($bdd,$id);

$_SESSION['flash'] = '<h1>Transaction Type '.$_POST['type'].' deleted with succes !</h1>';

header('Location:/'.$project_path.'/index.php?transType=list');
