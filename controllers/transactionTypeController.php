<?php

switch ($_GET['transType']) {
    case "create":
        checkPermission('Bankist(s),Insurer(s)');
        include('views/admin/createTransactionTypeView.php');
        break;

    case "edit":
        checkPermission('Bankist(s),Insurer(s)');
        include('views/admin/editTransactionTypeView.php');
        break;

    case "list":
        checkPermission('Bankist(s),Insurer(s)');
        include('views/admin/listTransactionTypeView.php');
        break;

    //Actions
    case "createAction":
        checkPermission('Bankist(s),Insurer(s)');
        include('do/transactionTypes/createTransactionTypeAction.php');
        break;

    case "editAction":
        checkPermission('Bankist(s),Insurer(s)');
        include('do/transactionTypes/editTransactionTypeAction.php');
        break;

    case "deleteAction":
        checkPermission('Bankist(s),Insurer(s)');
        include('do/transactionTypes/deleteTransactionTypeAction.php');
        break;

    default:
        echo "<p style='font-size:99vh'>_404</p>";
}

