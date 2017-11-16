<?php

include('views/headers/default.php');
?>

<h4>
    <a href="<?php $project_name ?>index.php?skill=create">+ Add skill</a>

</h4>

<?php messageFlash(); ?>

<?php
require('models/tickets.php');
foreach (getSkills($bdd) as $sk) {
    echo '<h2>#' . $sk['id'] . ' ' . $sk['language'] . ' <a href="/' . $project_name . '/index.php?skill=edit&id=' . $sk['id'] . '">✎</a>
          <a href="/' . $project_name . '/index.php?skill=deleteAction&id=' . $sk['id'] . '">×</a></h2>';
}
?>
