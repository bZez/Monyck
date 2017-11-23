<?php
/**
 * Created by PhpStorm.
 * User: michael
 * Date: 16/11/17
 * Time: 13:28
 */

$tt=sanitizeText($_POST['title']);
$ds=sanitizeText($_POST['description']);
$cd=$_POST['creationdate'];
$et=$_POST['exptime'];
$idu=sanitizeNumber($_SESSION['id']);
$ids=sanitizeNumber($_POST['id_skill']);

//Fonction createTicket() exécute la requête !
createTicket($bdd,$tt,$ds,$cd,$et,$idu,$ids);

$_SESSION['flash'] = '<h1>Ticket '.$_POST['title'].' created with succes !</h1>';

header('Location:/'.$project_path.'/index.php?ticket=list');
