<?php
include('views/headers/default.php');
require('models/users.php');

if (isset($_GET['id'])) {
    $type = $_GET['id'];
} else if (isset($_POST['usertype'])) {
    $type = $_POST['usertype'];
} else {
    ?>
    <form name="editusertype" method="POST">
        <select class="form-control" name='usertype' id="user" onchange="this.form.submit()">
            <?php
            setList($bdd, 'users_type', type, true)
            ?>
        </select>
    </form>
<?php } ?>
    <form name="user" method="POST">
<?php
if (isset($type)) {
    foreach (getOneUserType($bdd, $type) as $ty) {
        echo '<input name="id" type="hidden" value=' . $ty['id'] . '>
              <h2>#' . $ty['id'] . '<input name="type" type="text" value=' . $ty['type'] . '><br></h2>';
    }
    ?>
    <input type="submit" value="Save" name="save" formaction="index.php?type=editAction"">
    <input type="submit" value="x Delete" name="delete" formaction="index.php?type=deleteAction"">
    </form>
    <?php
}
include('views/footers/default.php');
?>