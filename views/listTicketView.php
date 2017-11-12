<?php
include ('views/headers/default.php');
?>

    <h4>
        <a href="<?php $project_name ?>index.php?ticket=create">Create</a>
        <a href="<?php $project_name ?>index.php?ticket=edit">Edit</a>
    </h4>

<?php
require ('models/tickets.php');
foreach(getTicketList($bdd) as $tk) {
    coloredStatus($tk,$tk['#status']);
echo '<h2>'.$tk['firstname'].'</h2>
              <h4>Skills<br>'.$tk['skillname'].'</h4>
              <h3>'.$tk['#amount'].' Ⓜ</h3>
              <h5>'.$tk['description'].'</h5>
              <input type="button" value="I can do it !"> ';
}
?>


<?php
include ('views/footers/default.php');
?>