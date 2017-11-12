<?php 

include ('config.php');
include ('functions.php');

if (isset($_GET['ticket']) && $_GET['ticket'] != null) {
    include ('controllers/ticketController.php');
    echo "<br>Controlleur Ticket avec la valeur: ". $_GET['ticket']."";
}
else if  (isset($_GET['user']) && $_GET['user'] != null) {
    include ('controllers/userController.php');
    echo "<br>Controlleur User avec la valeur: ". $_GET['user']."";
}
else if  (isset($_GET['transfer']) && $_GET['transfer'] != null) {
    include('controllers/transferController.php');
    echo "<br>Controlleur Transfer avec la valeur: ". $_GET['transfer']."";
}
else {
    include('views/indexView.php');
}