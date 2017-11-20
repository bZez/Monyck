<?php

switch ($_GET['skill']) {
    case "create":
        checkPermission('Bankist(s),Insurer(s)');
        include('views/admin/createSkillView.php');
        break;

    case "edit":
        checkPermission('Bankist(s),Insurer(s)');
        include('views/admin/editSkillView.php');
        break;

    case "list":
        checkPermission('Customer(s),Bankist(s),Insurer(s)');
        include('views/listSkillView.php');
        break;


    //Actions
    case "createAction":
        checkPermission('Bankist(s),Insurer(s)');
        include('do/skills/createSkillAction.php');
        break;

    case "editAction":
        checkPermission('Bankist(s),Insurer(s)');
        include('do/skills/editSkillAction.php');
        break;

    case "deleteAction":
        checkPermission('Bankist(s),Insurer(s)');
        include('do/skills/deleteSkillAction.php');
        break;

    default:
        echo "<p style='font-size:99vh'>_404</p>";
}

