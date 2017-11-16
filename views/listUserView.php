<?php
include('views/headers/default.php');
?>

    <h4>
        <a href="<?php $project_name ?>index.php?user=create">+ Add user</a>

    </h4>

<?php messageFlash(); ?>

<?php
require('models/users.php');
foreach (getUsersList($bdd) as $rs) {
    echo '<div style="width:100%">
              <div class="userblock">
              <h2>#' . $rs['id'] . ' ' . $rs['login'] . ' <a href="/' . $project_name . '/index.php?user=edit&id=' . $rs['id'] . '">✎</a>
              <a href="/' . $project_name . '/index.php?user=deleteAction&id=' . $rs['id'] . '">×</a></h2>
              <h6>' . $rs['bdate'] . '</h6>
              <h3>' . $rs['multitype'] . '</h3>
              <h4>' . $rs['fname'] . ' ' . $rs['lname'] . '</h4>
              <h6>' . $rs['mail'] . '</h6>
              </div>
          </div>';
}
?>

<?php
include('views/footers/default.php');
?>