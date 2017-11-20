<?php

switch ($_GET['ticket']) {
    case "create":
        checkPermission('Customer(s),Bankist(s),Insurer(s)');
            include('views/createTicketView.php');
        break;

    case "edit":
        checkPermission('Customer(s),Bankist(s),Insurer(s)');
            include('views/editTicketView.php');
        break;

    case "list":
        checkPermission('Customer(s),Bankist(s),Insurer(s)');
        include ('views/listTicketView.php');
        break;

    case "view":
        checkPermission('Customer(s),Bankist(s),Insurer(s)');
        include ('views/viewTicketView.php');
        break;

    //Actions
    case "createAction":
        checkPermission('Customer(s),Bankist(s),Insurer(s)');
        include ('do/tickets/createTicketAction.php');
        break;

    case "editAction":
        checkPermission('Customer(s),Bankist(s),Insurer(s)');
        include ('do/tickets/editTicketAction.php');
        break;

    case "deleteAction":
        checkPermission('Customer(s),Bankist(s),Insurer(s)');
        include ('do/tickets/deleteTicketAction.php');
        break;

    default:
        echo "<p style='font-size:99vh'>_404</p>";
}

