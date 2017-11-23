<?php

switch ($_GET['transType']) {
    case "create":
        include('models/transactions.php');
        include('views/headers/loginUserView.php');
        include('views/admin/createTransactionTypeView.php');
        break;

    case "edit":
        include('views/headers/default.php');
        require('models/transactions.php');
        include('views/admin/editTransactionTypeView.php');
        break;

    case "list":
        include('views/admin/listTransactionTypeView.php');
        break;

    //Actions
    case "createAction":
        require('models/transactions.php');
        include('do/transactionTypes/createTransactionTypeAction.php');
        break;

    case "editAction":
        require('models/transactions.php');
        include('do/transactionTypes/editTransactionTypeAction.php');
        break;

    case "deleteAction":
        require('models/transactions.php');
        include('do/transactionTypes/deleteTransactionTypeAction.php');
        break;

    default:
        echo "<p style='font-size:99vh'>_404</p>";
}