<?php
$id=sanitizeNumber($_POST['id']);
$tl=sanitizeText($_POST['title']);
$ds=sanitizeText($_POST['description']);
$cd=$_POST['creationDate'];
$et=$_POST['expTime'];
$iu=sanitizeNumber($_POST['id_user']);
$is=sanitizeNumber($_POST['id_skill']);

editTicket($bdd,$id,$tl,$ds,$cd,$et,$iu,$is);

$_SESSION['flash'] = '<h1>Ticket '.$_POST['title'].' édité avec succès !</h1>';

header('Location:/'.$project_path.'/index.php?ticket=list');

