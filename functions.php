<?php

function messageFlash() {
    if (isset($_SESSION['flash'])) {
        echo $_SESSION['flash'];
        unset($_SESSION['flash']);
    }
}

function coloredStatus($tk,$statID) {
    if($statID == 1) {
        echo '<h6 style="color:green;">'.$tk['status'].'</h6>';
    }
    else if($statID == 2) {
        echo '<h6>'.$tk['status'].'</h6>';
    }
}