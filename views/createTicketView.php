<?php
include ('views/headers/default.php');
require ('models/users.php');
?>

    <h3>Create new ticket</h3>
    <form id='createticket' class="form-inline" method="POST">
        <label>Description:</label><br>
        <input class="form-control" type="text" name='description' placeholder="Détails..."><br><br>
        <label>User:</label><br>
        <select class="form-control" name='skills'>
            <?php
            foreach(getUsersList($bdd) as $us) {
                echo '<option value="'.$us['id'].'">'.$us['firstname'].'</option>';
            }
            ?>
        </select><br><br>
        <label>Skills:</label><br>
        <select class="form-control" name='skills'>
            <?php
            foreach(getSkillsList($bdd) as $sk) {
                echo '<option value="'.$sk['id'].'">'.$sk['skillname'].'</option>';
            }
            ?>
        </select><br><br>

        <input class="btn btn-primary" type="submit" value="Ajouter !">
    </form>

<?php
include ('views/footers/default.php');
?>