<?php

switch ($_GET['skill']) {
    case "create":
        checkPermissions('Banker');
        include('models/tickets.php');
        include('views/headers/loginUserView.php');
        include('views/admin/createSkillView.php');
        break;

    case "edit":
        checkPermissions('Banker');
        include('views/headers/default.php');
        require('models/tickets.php');
        include('views/admin/editSkillView.php');
        break;

    case "list":
        include('views/headers/default.php');
        include('views/listSkillView.php');
        break;


    //Actions
    case "createAction":
        require ('models/tickets.php');
        include('do/skills/createSkillAction.php');
        break;

    case "editAction":
        require ('models/tickets.php');
        include('do/skills/editSkillAction.php');
        break;

    case "deleteAction":
        require ('models/tickets.php');
        include('do/skills/deleteSkillAction.php');
        break;

    default:
        echo "<p style='font-size:99vh'>_404</p>";
}