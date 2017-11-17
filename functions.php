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

function checkSession($bdd){
    $result= $bdd->query("SELECT * FROM users
                          WHERE email='".$_SESSION['email']."'
                          AND password='".$_SESSION['password']."'");
    $line=$result->fetch_assoc();
    $_SESSION['id']=$line['id'];
    $_SESSION['login']=$line['login'];
    if($result->num_rows >0){
        return true;
    }
    else {
        return false;
    }
}