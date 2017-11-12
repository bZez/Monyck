<?php

switch ($_GET['user']) {
    case "create":
        include ('views/createUserView.php');
        break;

    case "edit":
        include ('views/editUserView.php');
        break;

    case "list":
        include ('views/listUserView.php');
        break;

    //Actions
    case "createAction":
        include ('do/users/createUserAction.php');
        break;

    case "editAction":
        include ('do/users/editUserAction.php');
        break;

    case "deleteAction":
        include ('do/users/deleteUserAction.php');
        break;

    default:
        echo "<p style='font-size:99vh'>_404</p>";
}