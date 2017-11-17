<?php
include('views/headers/login.php');
?>

    <h4>≡
        <a href="<?php $project_name ?>index.php?type=userlist">Usertypes</a> ≡
        <a href="<?php $project_name ?>index.php?user=create">+ Add user</a> ≡

    </h4>

<?php messageFlash(); ?>

<?php
require('models/users.php');
foreach (getUsers($bdd) as $rs) {
    echo '<h2>#' . $rs['id'] . ' ' . $rs['login'] . ' <a href="/' . $project_name . '/index.php?user=edit&id=' . $rs['id'] . '">✎</a>
              <a href="/' . $project_name . '/index.php?user=deleteAction&id=' . $rs['id'] . '">×</a></h2>
              <h6>' . $rs['birthday'] . '</h6>
              <h3>' . $rs['multitype'] . '</h3>
              <h4>' . $rs['firstname'] . ' ' . $rs['lastname'] . '</h4>
              <h6>' . $rs['email'] . '</h6>';
}
?>

<?php
include('views/footers/default.php');
?>