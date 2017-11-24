<?php

switch ($_GET['offer']) {
    case "create":
        checkPermissions('Customer');
        include('views/headers/default.php');
        include('models/offers.php');
        include('models/users.php');
        include('views/createOfferView.php');
        break;

    case "edit":
        checkPermissions('Customer');
        include('views/headers/default.php');
        require('models/offers.php');
        include('views/editOfferView.php');
        break;

    case "view":
        checkPermissions('Customer');
        include('views/headers/default.php');
        require('models/offers.php');
        include('views/viewOfferView.php');
        break;

    case "viewreport":
        checkPermissions('Customer');
        include('views/headers/default.php');
        require('models/offers.php');
        include('views/viewReportView.php');
        break;

    case "list":
        checkPermissions('Customer');
        include('views/headers/default.php');
        include('views/listOfferView.php');
        break;

    case "report":
        checkPermissions('Customer');
        include('views/headers/default.php');
        include('views/createReportView.php');
        break;

    case "reported":
        checkPermissions('Customer');
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