<?php

switch ($_GET['offer']) {
    case "create":
        include('views/headers/default.php');
        include('models/offers.php');
        include('models/users.php');
        include('views/createOfferView.php');
        break;

    case "edit":
        include('views/headers/default.php');
        require('models/offers.php');
        include('views/editOfferView.php');
        break;

    case "view":
        include('views/viewOfferView.php');
        break;

    case "list":
        include('views/headers/default.php');
        include('views/listOfferView.php');
        break;

    case "report":
        include('views/headers/default.php');
        include('views/createReportView.php');
        break;

    case "reported":
        include('views/headers/default.php');
        include('views/listReportedOfferView.php');
        break;

    //Actions
    case "createAction":
        require('models/offers.php');
        include('do/offers/createOfferAction.php');
        break;

    case "createReportAction":
        require('models/offers.php');
        include('do/offers/createReportAction.php');
        break;


    case "editAction":
        require ('models/offers.php');
        include('do/offers/editOfferAction.php');
        break;

    case "deleteAction":
        require ('models/offers.php');
        include('do/offers/deleteOfferAction.php');
        break;

    default:
        echo "<p style='font-size:99vh'>_404</p>";
}