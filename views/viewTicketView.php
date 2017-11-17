<?php
/**
 * Created by PhpStorm.
 * User: michael
 * Date: 16/11/17
 * Time: 13:17
 */

include('views/headers/login.php');

if (isset($_GET['id'])) {
    $ticket = $_GET['id'];
} else {
    echo 'Hmm... 404 ?!';
}
?>


<h4>
    <a href="<?php $project_name ?>index.php?ticket=create">+ Add ticket</a>

</h4>

<?php messageFlash(); ?>

<?php
require('models/tickets.php');
foreach (getOneTicket($bdd, $ticket) as $tk) {
echo '<hr><h2>#' . $tk['id'] . ' ' . $tk['title'] . ' 
          <a href="/' . $project_name . '/index.php?ticket=edit&id=' . $tk['id'] . '">✎</a>
          <a href="/' . $project_name . '/index.php?ticket=deleteAction&id=' . $tk['id'] . '">×</a></h2><br>
          ' . $tk['description'] . '<br><br>
          <strong>Creation date:</strong><br>' . $tk['creationDate'] .'<br>
          <strong>Expiration time:</strong><br>' . $tk['expTime'] .'<br><br>
          <strong>Posted by:</strong><br>'.$tk['login'].'<hr>';
          }