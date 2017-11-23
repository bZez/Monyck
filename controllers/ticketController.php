<?php

switch ($_GET['ticket']) {
    case "create":
        include('models/tickets.php');
        include('views/headers/default.php');
        include('views/createTicketView.php');
        break;

    case "edit":
        include('views/headers/default.php');
        require('models/tickets.php');
        include('views/editTicketView.php');
        break;

    case "list":
        include('views/headers/default.php');
        require('models/tickets.php');
        include ('views/listTicketView.php');
        break;

    case "view":
        include('views/headers/default.php');
        require('models/tickets.php');
        include ('views/viewTicketView.php');
        break;

    //Actions
    case "createAction":
        require ('models/tickets.php');
        include ('do/tickets/createTicketAction.php');
        break;

    case "editAction":
        require ('models/tickets.php');
        include ('do/tickets/editTicketAction.php');
        break;

    case "deleteAction":
        require ('models/tickets.php');
        include ('do/tickets/deleteTicketAction.php');
        break;

    default:
        echo "<p style='font-size:99vh'>_404</p>";
}