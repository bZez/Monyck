<?php

$bdd = mysqli_connect("localhost", "root", "rooted", "monyckDB");

if (!$bdd) {
    echo "Erreur de connexion MySQL" . PHP_EOL;
    exit;
}

ini_set('display_errors', 1);
$project_title = 'BANK OF MONYCKS';
//N'oubliez pas de modifier le nom du dossier du projet.
//Si vous êtes à la racine laissez vide
$project_path = 'Monycks';

session_start();
