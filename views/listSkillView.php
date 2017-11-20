<?php
include('views/headers/default.php');
?>

<h4><?php if(checkPermission('Bankist(s),Insurer(s)')) {?>
    <a href="<?php $project_path ?>index.php?skill=create">+ Add skill</a>
    <?php } ?>
</h4>

<?php messageFlash(); ?>

<?php
require('models/tickets.php');
foreach (getSkills($bdd) as $sk) {
    echo '<h2>#' . $sk['id'] . ' ' . $sk['language'] . ' <a href="/' . $project_path . '/index.php?skill=edit&id=' . $sk['id'] . '">✎</a>
          <a href="/' . $project_path . '/index.php?skill=deleteAction&id=' . $sk['id'] . '">×</a></h2>';
}
?>
