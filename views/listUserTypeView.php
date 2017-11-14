<?php
include ('views/headers/default.php');
?>

    <h4>
        <a href="<?php $project_name ?>index.php?type=create">Create</a>
        <a href="<?php $project_name ?>index.php?type=edit">Edit</a>
    </h4>

<?php messageFlash(); ?>

<?php
require ('models/users.php');
foreach(getUserTypeList($bdd) as $t) {
    echo '<h2>#'.$t['id'].' '.$t['type'].' <a href="/'.$project_name.'/index.php?type=edit&id='.$t['id'].'">x</a></h2></a><br>';
}
?>

<?php
include ('views/footers/default.php');
?>