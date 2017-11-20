<?php

switch ($_GET['offer']) {
    case "create":
        checkPermission('Customer(s),Bankist(s),Insurer(s)');
        include('views/createOfferView.php');
        break;

    case "edit":
        checkPermission('Customer(s),Bankist(s),Insurer(s)');
        include('views/editOfferView.php');
        break;

    case "view":
        checkPermission('Customer(s),Bankist(s),Insurer(s)');
        include('views/viewOfferView.php');
        break;

    case "list":
        checkPermission('Customer(s),Bankist(s),Insurer(s)');
        include('views/listOfferView.php');
        break;

    case "reported":
        checkPermission('Customer(s),Bankist(s),Insurer(s)');
        include('views/listReportedOfferView.php');
        break;

    //Actions
    case "createAction":
        checkPermission('Customer(s),Bankist(s),Insurer(s)');
        include('do/offers/createOfferAction.php');
        break;

    case "editAction":
        checkPermission('Customer(s),Bankist(s),Insurer(s)');
        include('do/offers/editOfferAction.php');
        break;

    case "deleteAction":
        checkPermission('Customer(s),Bankist(s),Insurer(s)');
        include('do/offers/deleteOfferAction.php');
        break;

    default:
        echo "<p style='font-size:99vh'>_404</p>";
}