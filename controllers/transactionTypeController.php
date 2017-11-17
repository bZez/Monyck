<?php

switch ($_GET['transType']) {
    case "create":
        include ('views/createTransactionTypeView.php');
        break;

    case "edit":
        include ('views/editTransactionTypeView.php');
        break;

    case "list":
        include ('views/listTransactionTypeView.php');
        break;


    //Actions
    case "createAction":
        include ('do/transactionTypes/createTransactionTypeAction.php');
        break;

    case "editAction":
        include ('do/transactionTypes/editTransactionTypeAction.php');
        break;

    case "deleteAction":
        include ('do/transactionTypes/deleteTransactionTypeAction.php');
        break;

    default:
        echo "<p style='font-size:99vh'>_404</p>";
}

