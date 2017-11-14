<?php

$bdd = mysqli_connect("localhost","login","password","monyckDB");

if (!$bdd) {
	echo "Erreur de connexion MySQL" . PHP_EOL;
	exit;
}
  //N'oubliez pas de modifier le nom
  $project_name = 'Monycks';

session_start();