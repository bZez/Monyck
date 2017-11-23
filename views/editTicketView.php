<?php

if (isset($_GET['id'])) {
    $ticket = $_GET['id'];
} else {
    echo 'Hmm... 404 ?!';
} ?>
    <form name="ticket" method="POST">
<?php
if (isset($ticket)) {
    foreach (getOneTicket($bdd, $ticket) as $rs) {
        echo '<input name="id" type="hidden" value=' . $rs['id'] . '>
              <h2>#' . $rs['id'] . '<input name="title" type="text" value=' . $rs['title'] . '><br></h2>';
        echo '<input name="id" type="hidden" value=' . $rs['id'] . '>
              <h2><input name="description" type="text" value=' . $rs['description'] . '><br></h2>';
        echo '<input name="id" type="hidden" value=' . $rs['id'] . '>
              <h2><input name="creationDate" type="date" value=' . $rs['creationDate'] . '><br></h2>';
        echo '<input name="id" type="hidden" value=' . $rs['id'] . '>
              <h2><input name="expTime" type="time" value=' . $rs['expTime'] . '><br></h2>';
        echo '<input name="id" type="hidden" value=' . $rs['id'] . '>
              <h2><input name="id_user" type="text" value=' . $rs['id_user_ticket'] . '><br></h2>';
        echo '<input name="id" type="hidden" value=' . $rs['id'] . '>
              <h2><input name="id_skill" type="text" value=' . $rs['id_skill'] . '><br></h2>';

    }
    ?>
    <input type="submit" value="Save" name="save" formaction="index.php?ticket=editAction">
    <input type="submit" value="Delete" name="delete" formaction="/<?php echo $project_path.'/index.php?ticket=deleteAction&id='.$rs['id'] ?>">
    </form>
    <?php
}
?>