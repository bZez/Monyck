<?php
require('models/users.php');
require('models/tickets.php');

switch ($_GET['ticket']) {
    case "create":
        checkPermissions('Customer');
        include('views/createTicketView.php');
        break;

    case "edit":
        checkPermissions('Customer');
        include('views/editTicketView.php');
        break;

    case "list":
        include('views/listTicketView.php');
        break;

    case "view":
        include('views/viewTicketView.php');
        break;

    //Actions
    case "createAction":
        include('do/tickets/createTicketAction.php');
        break;

    case "editAction":
        include('do/tickets/editTicketAction.php');
        break;

    case "deleteAction":
        include('do/tickets/deleteTicketAction.php');
        break;

    default:
        echo "<p style='font-size:99vh'>_404</p>";
}