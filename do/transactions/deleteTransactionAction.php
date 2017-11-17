<?php

require ('models/transactions.php');
$id=$_GET['id'];

deleteTransaction($bdd,$id);

$_SESSION['flash'] = '<h1>Transaction deleted with succes !</h1>';

header('Location:/'.$project_name.'/index.php?transaction=list');
