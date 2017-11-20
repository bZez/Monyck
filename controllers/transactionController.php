<?php

switch ($_GET['transaction']) {
    case "create":
        checkPermission('Bankist(s),Insurer(s)');
        include('views/admin/createTransactionView.php');
        break;

    case "edit":
        checkPermission('Bankist(s),Insurer(s)');
        include('views/admin/editTransactionView.php');
        break;

    case "list":
        checkPermission('Bankist(s),Insurer(s)');
        include('views/admin/listTransactionView.php');
        break;


    //Actions
    case
    "createAction":
        checkPermission('Bankist(s),Insurer(s)');
        include('do/transactions/createTransactionAction.php');
        break;

    case "editAction":
        checkPermission('Bankist(s),Insurer(s)');
        include('do/transactions/editTransactionAction.php');
        break;

    case "deleteAction":
        checkPermission('Bankist(s),Insurer(s)');
        include('do/transactions/deleteTransactionAction.php');
        break;

    default:
        echo "<p style='font-size:99vh'>_404</p>";
}

