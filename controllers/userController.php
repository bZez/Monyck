<?php


switch ($_GET['user']) {

    case "create":
        checkPermission('Bankist(s),Insurer(s)');
        include('views/admin/createUserView.php');
        break;

    case "edit":
        checkPermission('Bankist(s),Insurer(s)');
        include('views/admin/editUserView.php');
        break;

    case "list":
        checkPermission('Customer(s),Bankist(s),Insurer(s)');
        include('views/listUserView.php');
        break;
    //Actions
    case "loginUserAction":
        include('do/users/loginUserAction.php');
        break;

    case "createAction":
        checkPermission('Bankist(s),Insurer(s)');
        include('do/users/createUserAction.php');
        break;

    case "editAction":
        checkPermission('Bankist(s),Insurer(s)');
        include('do/users/editUserAction.php');
        break;

    case "deleteAction":
        checkPermission('Bankist(s),Insurer(s)');
        include('do/users/deleteUserAction.php');
        break;

    default:
        echo "<p style='font-size:99vh'>_404</p>";
}
