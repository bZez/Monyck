<?php

switch ($_GET['transaction']) {
    case "create":
        include ('views/createTransactionView.php');
        break;

    case "edit":
        include ('views/editTransactionView.php');
        break;

    case "list":
        include ('views/listTransactionView.php');
        break;


    //Actions
    case "createAction":
        include ('do/transactions/createTransactionAction.php');
        break;

    case "editAction":
        include ('do/transactions/editTransactionAction.php');
        break;

    case "deleteAction":
        include ('do/transactions/deleteTransactionAction.php');
        break;

    default:
        echo "<p style='font-size:99vh'>_404</p>";
}

