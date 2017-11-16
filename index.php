<?php 

include ('config.php');
include ('functions.php');

if  (isset($_GET['user']) && $_GET['user'] != null) {
    include ('controllers/userController.php');
}

else if  (isset($_GET['type']) && $_GET['type'] != null) {
    include('controllers/typeController.php');
}

else {
    include('views/indexView.php');
}