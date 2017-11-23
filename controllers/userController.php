<?php


switch ($_GET['user']) {

    case "create":
        include('models/users.php');
        include('views/headers/default.php');
        include('views/admin/createUserView.php');
        break;

    case "edit":
        include('views/headers/default.php');
        require('models/users.php');
        include('views/admin/editUserView.php');
        break;

    case "list":
        include('views/headers/default.php');
        require('models/users.php');
        include('views/listUserView.php');
        break;

    case "logout":
        session_destroy();
        header('Location:index.php');
        break;

    case "login":
        include('views/loginUserView.php');
        break;

    //Actions
    case "loginUserAction":
        include('models/login.php');
        include('do/users/loginUserAction.php');
        break;

    case "createAction":
        require('models/users.php');
        include('do/users/createUserAction.php');
        break;

    case "editAction":
        require('models/users.php');
        include('do/users/editUserAction.php');
        break;

    case "deleteAction":
        require('models/users.php');
        include('do/users/deleteUserAction.php');
        break;

    default:
        echo "<p style='font-size:99vh'>_404</p>";
}
