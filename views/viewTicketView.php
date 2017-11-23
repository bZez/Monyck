<?php

if (isset($_GET['id'])) {
    $ticket = $_GET['id'];
} else {
    echo 'Hmm... 404 ?!';
}
?>


<h4><?php if(checkPermission('Customer(s),Bankist(s),Insurer(s)')) {?>
    <a href="<?php $project_path ?>index.php?ticket=create">+ Add ticket</a>
<?php } ?>
</h4>

<?php messageFlash(); ?>

<?php
foreach (getOneTicket($bdd, $ticket) as $tk) {
echo '<hr><h2>#' . $tk['id'] . ' ' . $tk['title'] . ' 
          <a href="' . $project_path . 'index.php?ticket=edit&id=' . $tk['id'] . '">✎</a>
          <a href="' . $project_path . 'index.php?ticket=deleteAction&id=' . $tk['id'] . '">×</a></h2><br>
          ' . $tk['description'] . '<br><br>
          <strong>Creation date:</strong><br>' . $tk['creationDate'] .'<br>
          <strong>Expiration time:</strong><br>' . $tk['expTime'] .'<br><br>
          <strong>Posted by:</strong><br>'.$tk['login'].'<hr>';
          }