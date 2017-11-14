<?php
include('models/users.php');
include('views/headers/default.php');
?>
    <h3>Ajouter un Type D'Utilisateur</h3>
    <form id='createusertype' class="form-inline" method="POST" action="index.php?type=createAction">
       <input name="type" type="text" placeholder="Name your type...">
        <input type="submit" name="submit" value="submit">
    </form>

<?php
include('views/footers/default.php');
?>