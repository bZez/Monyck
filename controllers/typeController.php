<?php

switch ($_GET['type']) {
    case "create":
        checkPermissions('Banker');
        include('models/users.php');
        include('views/headers/login.php');
        include('views/admin/createUserTypeView.php');
        break;

    case "userlist":
        checkPermissions('Banker');
        include('views/headers/default.php');
        require('models/users.php');
        include('views/admin/listUserTypeAndUserView.php');
        break;

    case "list":
        checkPermissions('Banker');
        include('views/headers/default.php');
        require('models/users.php');
        include('views/admin/listUserTypeView.php');
        break;


    case "edit":
        checkPermissions('Banker');
        include('views/headers/default.php');
        require('models/users.php');
        include('views/admin/editUserTypeView.php');
        break;

    //Actions
    case "createAction":
        require ('models/users.php');
        include('do/usertypes/createUserTypeAction.php');
        break;

    case "editAction":
        require ('models/users.php');
        include('do/usertypes/editUserTypeAction.php');
        break;

    case "deleteAction":
        require ('models/users.php');
        include('do/usertypes/deleteUserTypeAction.php');
        break;

    default:
        echo "<p style='font-size:99vh'>_404</p>";
}