<?php

switch ($_GET['type']) {
    case "create":
        include('views/createUserTypeView.php');
        break;

    case "userlist":
        include('views/listUserTypeAndUserView.php');
        break;

    case "list":
        include('views/listUserTypeView.php');
        break;


    case "edit":
        include('views/editUserTypeView.php');
        break;

    //Actions
    case "createAction":
        include('do/types/createUserTypeAction.php');
        break;

    case "editAction":
        include('do/types/editUserTypeAction.php');
        break;

    case "deleteAction":
        include('do/types/deleteUserTypeAction.php');
        break;

    default:
        echo "<p style='font-size:99vh'>_404</p>";
}