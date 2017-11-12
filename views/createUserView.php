<?php
include ('models/users.php');
include ('views/headers/default.php');
?>
<h3>Ajouter un Utilisateur</h3>
<form id='createuser' class="form-inline" method="POST" action="index.php?user=createAction">
    <label>Login:</label><br>
    <input class="form-control" type="text" name='login' placeholder="Votre pseudo..." required="true"><br><br>
    <label>Prénom:</label><br>
    <input class="form-control" type="text" name='firstname' placeholder="Votre prénom..." required="true"><br><br>
    <label>Nom:</label><br>
    <input class="form-control" type="text" name='lastname' placeholder="Votre nom..." required="true"><br><br>
    <label>Skills:</label><br>
    <select class="form-control" name='skills'>
       <?php
foreach(getSkillsList($bdd) as $sk) {
    echo '<option value="'.$sk['id'].'">'.$sk['skillname'].'</option>';
}
?>
    </select><br><br>
    <label>Mail:</label><br>
    <input class="form-control" type="email" name='email' placeholder="Votre mail..." required="true"><br><br>
    <label>Mot de passe:</label><br>
    <input class="form-control" type=password name='password' placeholder="Votre mot de passe..." required="true"><br><br>
    <input class="btn btn-primary" type="submit" value="Ajouter !">
</form>

<?php
include ('views/footers/default.php');
?>