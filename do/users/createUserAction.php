<?php

require('models/users.php');
$l = $_POST["login"];
$fn = $_POST["fname"];
$ln = $_POST["lname"];
$bd = $_POST["bdate"];
$m = $_POST["mail"];
$pw = $_POST["pw"];
$tid= '';
if (isset($_POST['type']) && $_POST['type'] != null) {
    foreach($_POST['type'] as $ty)
    {
        $tid .= $ty.",";
    }
}
//Fonction createUser() exécute la requête !
createUser($bdd, $l, $fn, $ln, $bd, $m, $pw, $tid);

$_SESSION['flash'] = '<h1>User '.$_POST['login'].' créé avec succès !</h1>';

header('Location:/'.$project_path.'/index.php?user=list');
