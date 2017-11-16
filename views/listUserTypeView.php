<?php
include ('views/headers/default.php');
?>

    <h4>
        <a href="<?php $project_name ?>index.php?type=create">+ Add type</a>

    </h4>

<?php messageFlash(); ?>

<?php
require ('models/users.php');
foreach (getUserByType($bdd) as $t) {
    echo '<div style="width:100%;text-align: center;">
              <div class="typeblock">
              <h2>#'.$t['id'].' '.$t['type'].' <a href="/'.$project_name.'/index.php?type=edit&id='.$t['id'].'">✎</a>
          <a href="/'.$project_name.'/index.php?type=deleteAction&id='.$t['id'].'">×</a></h2><br>
          <div class="inblock">'.$t['userbytype'].'</div>
    </div>
          </div>';
}
?>
<br>
<?php
include ('views/footers/default.php');
?>