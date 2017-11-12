<?php
include ('views/headers/default.php');
?>

   <h4>
       <a href="<?php $project_name ?>index.php?user=create">Create</a>
       <a href="<?php $project_name ?>index.php?user=edit">Edit</a>
   </h4>

<?php messageFlash(); ?>

<?php
require ('models/users.php');
foreach(getUsersList($bdd) as $rs) {
        echo '<h2>#'.$rs['id'].' '.$rs['login'].'</h2>
              <h3>'.$rs['credit'].' Ⓜ</h3>
              <h4>'.$rs['firstname'].' '.$rs['lastname'].'</h4>
              <h5>Skills<br>'.$rs['skillname'].'</h5>
              <h6>'.$rs['email'].'</h6>';
    }
?>

<?php
include ('views/footers/default.php');
?>