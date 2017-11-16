<?php
include('models/offers.php');
include('views/headers/default.php');
include('models/users.php');
?>
    <h3>Create new offer</h3>
    <form id='createoffer' class="form-inline" method="POST" action="index.php?offer=createAction">
        <label>Amount:</label><br>
        <input class="form-control" type="number" name='amount' placeholder="How much you want..."
               required="true"><br><br>
        <select multiple class="form-control" name='id_ticket'>
            <?php
            foreach (getTicketsOffersReports($bdd) as $ti) {
                echo '<option value="' . $ti['id_ticket'] . '">' . $ti['title'] . '</option>';
            }
            ?>
        </select><br><br>
        <label>Allowed time:</label><br>
        <input class="form-control" type="date" name='execTime' placeholder="00:00:00" required="true"><br><br>
        <label>Insurance:</label><br>
        <input class="form-control" type="text" name='insurance' required="true"><br><br>
        <label>User:</label><br>
        <select multiple class="form-control" name='id_user_offer'>
            <?php
            foreach (getUsers($bdd) as $us) {
                echo '<option value="' . $us['id'] . '">' . $us['login'] . '</option>';
            }
            ?>
        </select><br><br>
        <input class="btn btn-primary" type="submit" value="Ajouter !">
    </form>

<?php
include('views/footers/default.php');
?>