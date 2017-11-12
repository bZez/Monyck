<?php
include('views/headers/default.php');
require('models/users.php');
?>
    <form name="edituser" method="POST">
        <select class="form-control" name='user' id="user" onchange="this.form.submit()">
            <option>Select user...</option>
            <?php
            foreach (getUsersList($bdd) as $us) {
                echo '<option value="' . $us['id'] . '">' . $us['firstname'] . '</option>';
            }
            ?>
        </select>
    </form>

    <form name="user" method="POST">
<?php
if (isset($_POST['user'])) {
    foreach (getOneUser($bdd, $_POST['user']) as $rs) {
        echo '<input name="id" type="hidden" value=' . $rs['id'] . '>
              <h2>#' . $rs['id'] . '<input name="login" type="text" value=' . $rs['login'] . '><br></h2>
              <input name="credit" type="number" value=' . $rs['credit'] . '>Ⓜ
              <h4>' . $rs['firstname'] . ' ' . $rs['lastname'] . '</h4>
              <h5>Skills<br>
              <select class="form-control" name="skills">';
        foreach (getSkillsList($bdd) as $sk) {
            if ($rs['#id_skills'] == $sk['id']) {
                echo '<option value="' . $sk['id'] . '" selected="selected">' . $sk['skillname'] . '</option>';
            } else {
                echo '<option value="' . $sk['id'] . '">' . $sk['skillname'] . '</option>';
            }
        }
        ?>
        </select>
        <?php
        echo '<h6>' . $rs['email'] . '</h6>';
    }
    ?>
    <input type="submit" value="Save" name="save" formaction="index.php?user=editAction"">
    <input type="submit" value="x Delete" name="delete" formaction="index.php?user=deleteAction"">
    </form>
    <?php
}
include('views/footers/default.php');
?>