<?php

switch ($_GET['skill']) {
    case "create":
        include('views/createSkillView.php');
        break;

    case "edit":
        include('views/editSkillView.php');
        break;

    case "list":
        include('views/listSkillView.php');
        break;


    //Actions
    case "createAction":
        include('do/skills/createSkillAction.php');
        break;

    case "editAction":
        include('do/skills/editSkillAction.php');
        break;

    case "deleteAction":
        include('do/skills/deleteSkillAction.php');
        break;

    default:
        echo "<p style='font-size:99vh'>_404</p>";
}

