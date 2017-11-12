<?php

switch ($_GET['ticket']) {
    case "create":
        include ('views/createTicketView.php');
        break;

    case "edit":
        include ('views/editTicketView.php');
        break;

    case "list":
        include ('views/listTicketView.php');
        break;

    //Actions
    case "createAction":
        include ('views/createTicketAction.php');
        break;


    default:
        echo "<p style='font-size:99vh'>_404</p>";
}