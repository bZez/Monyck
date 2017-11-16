<?php

require ('models/tickets.php');
$id=$_POST['id'];
$sk=$_POST['skill'];


editSkill($bdd,$id,$sk);

$_SESSION['flash'] = '<h1>Skill '.$_POST['skill'].' édité avec succès !</h1>';

header('Location:/'.$project_name.'/index.php?skill=list');


