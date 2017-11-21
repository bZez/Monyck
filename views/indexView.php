<?php
include('views/headers/default.php');

if (isset($_SESSION['login'])) {
echo 'Hello '.$_SESSION['login'];
}else {
    echo "Hello... you must <a href=/$project_path/index.php?login><strong>login</strong></a>";
}

echo '<br>Les identifians ADMIN sont:<br> <b>admin@admin.com</b><br>123456';

include('views/footers/default.php');
