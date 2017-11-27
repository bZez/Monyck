<?php
require('models/offers.php');
require('models/users.php');

switch ($_GET['offer']) {
    case "create":
        checkPermissions('Customer');
        include('views/createOfferView.php');
        break;

    case "edit":
        checkPermissions('Customer');
        include('views/editOfferView.php');
        break;

    case "view":
        checkPermissions('Customer');
        include('views/viewOfferView.php');
        break;

    case "viewreport":
        checkPermissions('Customer');
        include('views/viewReportView.php');
        break;

    case "list":
        checkPermissions('Customer');
        include('views/listOfferView.php');
        break;

    case "report":
        checkPermissions('Customer');
        include('views/createReportView.php');
        break;

    case "reported":
        checkPermissions('Customer');
        include('views/listReportedOfferView.php');
        break;

    //Actions
    case "createAction":
        include('do/offers/createOfferAction.php');
        break;

    case "createReportAction":
        include('do/offers/createReportAction.php');
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