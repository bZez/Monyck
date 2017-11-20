<?php

switch ($_GET['type']) {
    case "create":
        checkPermission('Bankist(s),Insurer(s)');
        include('views/admin/createUserTypeView.php');
        break;

    case "userlist":
        checkPermission('Bankist(s),Insurer(s)');
        include('views/admin/listUserTypeAndUserView.php');
        break;

    case "list":
        checkPermission('Customer(s),Bankist(s),Insurer(s)');
        include('views/admin/listUserTypeView.php');
        break;


    case "edit":
        checkPermission('Bankist(s),Insurer(s)');
        include('views:admin/editUserTypeView.php');
        break;

    //Actions
    case "createAction":
        checkPermission('Bankist(s),Insurer(s)');
        include('do/usertypes/createUserTypeAction.php');
        break;

    case "editAction":
        checkPermission('Bankist(s),Insurer(s)');
        include('do/usertypes/editUserTypeAction.php');
        break;

    case "deleteAction":
        checkPermission('Bankist(s),Insurer(s)');
        include('do/usertypes/deleteUserTypeAction.php');
        break;

    default:
        echo "<p style='font-size:99vh'>_404</p>";
}