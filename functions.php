<?php

function messageFlash()
{
    if (isset($_SESSION['flash'])) {
        echo $_SESSION['flash'];
        unset($_SESSION['flash']);
    }
}


function setLists($bdd, $tableName, $displayField, $withTitle = false, $selectedId = null)
{
    if ($withTitle) {
        ?>
        <option>Select <?php echo $displayField ?></option>
        <?php
    }

    $result = $bdd->query("SELECT * FROM " . $tableName);
    while ($row = $result->fetch_object()) {
        ?>
        <option
            <?= $selectedId == $row->id ? 'selected' : '' ?>
                value="<?= $row->id ?>"><?= $row->$displayField ?></option>
        <?php
    }
}

function checkPermission($role)
{

    if (strpos($role, $_SESSION['role']) !== false) {
    } else if (strpos($role, 'Guest(s) ') !== false) {
    } else {
        header('Location:/Monycks/index.php?login');
    }
}