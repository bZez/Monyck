<?php
include('views/headers/default.php');

if (isset($_SESSION['email'])) {
echo 'Hello '.$_SESSION['id'];
}else {
    echo "Hello... you must <a href=".$project_path. "index.php?user=login><strong>login</strong></a>";
}

echo '<br>Les identifians ADMIN sont:<br> <b>admin@admin.com</b><br>123456';

include('views/footers/default.php');
