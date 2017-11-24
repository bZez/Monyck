<?php messageFlash(); ?>

<h3>Create new transaction</h3>
<form id='createtransaction' class="form-inline" method="POST" action="index.php?transaction=createAction">

    <label>Amount:</label><br>
    <input class="form-control" type="number" name='amount' placeholder="Le montant de ta transaction..."
           required="true"><br><br>
    <select class="form-control" name='transactionType'>
        <?php
        foreach (getTransactionTypeList($bdd) as $ttl) {
            echo '<option value="' . $ttl['id'] . '">' . $ttl['type'] . '</option>';
        }
        ?>
    </select><br><br>

    <label>Comment:</label><br>
    <input class="form-control" type="text" name='comment' placeholder="Intitulé de la transaction..."
           required="true"><br><br>

    <label>From</label><br>
    <select class="form-control" name='id_sender'>
        <?php
        foreach (getAllUsers($bdd) as $aU) {
            echo '<option value="' . $aU['id'] . '">' . $aU['firstname'] . ' ' . $aU['lastname'] . ' (' . $aU['login'] . ')</option>';
        }
        ?>
    </select><br><br>

    <label>To:</label><br>
    <select class="form-control" name='id_receveur'>
        <?php
        foreach (getAllUsers($bdd) as $aU) {
            echo '<option value="' . $aU['id'] . '">' . $aU['firstname'] . ' ' . $aU['lastname'] . ' (' . $aU['login'] . ')</option>';
        }
        ?>
    </select><br><br>

    <input class="btn btn-primary" type="submit" value="Send it !">
</form>