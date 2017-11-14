<?php
include('views/headers/default.php');
require('models/users.php');

if (isset($_GET['id']) && $_GET['id'] != null) {
    $user = $_GET['id'];
} else if (isset($_POST['user'])) {
    $user = $_POST['user'];
} else {
    ?>
    <form name="edituser" method="POST">
        <select class="form-control" name='user' id="user" onchange="this.form.submit()">
            <?php setList($bdd, 'users', 'login', true); ?>
        </select>
    </form>
<?php } ?>
    <form name="user" method="POST">
<?php
if (isset($user)) {
    foreach (getOneUser($bdd, $user) as $rs) {
        echo '<input name="id" type="hidden" value=' . $rs['id'] . '>
              <h2>#' . $rs['id'] . '<input name="login" type="text" value=' . $rs['login'] . '><br></h2>
              <h4>' . $rs['fname'] . ' ' . $rs['lname'] . '</h4>
              <h5>User type:<br>
              <select multiple class="form-control" name="type">';
        foreach (getUserTypeList($bdd, $rs['id']) as $ty) {
            echo '<option value="' . $ty['id'] . '" selected="selected">' . $ty['type'] . '</option>';
        }
        ?>
        </select>
        <?php
        echo '<h6>' . $rs['mail'] . '</h6>';
    }
    ?>
    <input type="submit" value="Save" name="save" formaction="index.php?user=editAction">
    <input type="submit" value="x Delete" name="delete"
           formaction="/<?php echo $project_name . '/index.php?user=deleteAction&id=' . $rs['id'] ?>">
    </form>
    <?php
}
include('views/footers/default.php');
?>