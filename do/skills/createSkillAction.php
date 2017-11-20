<?php
/**
 * Created by PhpStorm.
 * User: michael
 * Date: 16/11/17
 * Time: 13:28
 */


require ('models/tickets.php');
$sk=$_POST['skill'];

//Fonction createSkill() exécute la requête !
createSkill($bdd,$sk);
echo $sk;

$_SESSION['flash'] = '<h1>Skill '.$_POST['skill'].' created with succes !</h1>';

header('Location:/'.$project_path.'/index.php?skill=list');
