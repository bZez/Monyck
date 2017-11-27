<?php
require('models/users.php');
require('models/transactions.php');

switch ($_GET['transaction']) {
    case "create":
        checkPermissions('Customer');
        include('views/admin/createTransactionView.php');
        break;

    case "edit":
        checkPermissions('Banker');
        include('views/admin/editTransactionView.php');
        break;

    case "list":
        checkPermissions('Banker');

        include('views/admin/listTransactionView.php');
        break;


    //Actions
    case
    "createAction":
        include('do/transactions/createTransactionAction.php');
        break;

    case "editAction":
        include('do/transactions/editTransactionAction.php');
        break;

    case "deleteAction":
        include('do/transactions/deleteTransactionAction.php');
        break;

    default:
        echo "<p style='font-size:99vh'>_404</p>";
}