<?php

require ('models/tickets.php');
$id=$_GET['id'];
$sk=$_POST['skill'];

deleteSkill($bdd,$id);

$_SESSION['flash'] = '<h1>Skill '.$_POST['skill'].' deleted with succes !</h1>';

header('Location:/'.$project_path.'/index.php?skill=list');

