<?php

switch ($_GET['transaction']) {
    case "create":
        include('models/transactions.php');
        include('views/headers/default.php');
        include('views/admin/createTransactionView.php');
        break;

    case "edit":
        include('views/headers/default.php');
        require('models/transactions.php');
        include('views/admin/editTransactionView.php');
        break;

    case "list":
        include('views/headers/default.php');
        require('models/transactions.php');
        include('views/admin/listTransactionView.php');
        break;


    //Actions
    case
    "createAction":
        require('models/transactions.php');
        include('do/transactions/createTransactionAction.php');
        break;

    case "editAction":
        require('models/transactions.php');
        include('do/transactions/editTransactionAction.php');
        break;

    case "deleteAction":
        require('models/transactions.php');
        include('do/transactions/deleteTransactionAction.php');
        break;

    default:
        echo "<p style='font-size:99vh'>_404</p>";
}