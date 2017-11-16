<?php

switch ($_GET['offer']) {
    case "create":
        include('views/createOfferView.php');
        break;

    case "edit":
        include('views/editOfferView.php');
        break;

    case "view":
        include('views/viewOfferView.php');
        break;

    case "list":
        include('views/listOfferView.php');
        break;

    case "reported":
        include('views/listReportedOfferView.php');
        break;

    //Actions
    case "createAction":
        include('do/offers/createOfferAction.php');
        break;

    case "editAction":
        include('do/offers/editOfferAction.php');
        break;

    case "deleteAction":
        include('do/offers/deleteOfferAction.php');
        break;

    default:
        echo "<p style='font-size:99vh'>_404</p>";
}