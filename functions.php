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

function checkPermissions($role) {
    if (isset($_SESSION['roles'])) {
        $array = $_SESSION['roles'];
        if (in_array($role, $array)) {
            //That's OK
        } else {
            header('location:index.php?user=login');
        }
    } else {
        header('location:index.php?user=login');
    }

}

function isAdmin() {
    if (isset($_SESSION['roles'])) {
        $array = $_SESSION['roles'];
        if (in_array('Banker', $array)) {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}


function sanitizeText($text)
{
    $textMinuscule = mb_strtolower($text);
    $string = (string)$textMinuscule;
    $string1 = str_replace("select", "", $string);
    $string2 = str_replace("update", "", $string1);
    $string3 = str_replace("delete", "", $string2);
    $string4 = str_replace("update", "", $string3);
    return $string4;
}

function sanitizeNumber($number)
{
    $num = (int)$number;
    return $num;
}