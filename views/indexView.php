<?php
include('views/headers/default.php');

if (isset($_SESSION['login'])) {
echo 'Hello '.$_SESSION['login'];
}else {
    echo "Hello... you must <a href=/$project_path/index.php?login><strong>login</strong></a>";
}


include('views/footers/default.php');
