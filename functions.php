<?php

function messageFlash() {
    if (isset($_SESSION['flash'])) {
        echo $_SESSION['flash'];
        unset($_SESSION['flash']);
    }
}

function coloredStatus($tk,$statID) {
    if($statID == 1) {
        echo '<h6 style="color:green;">'.$tk['status'].'</h6>';
    }
    else if($statID == 2) {
        echo '<h6>'.$tk['status'].'</h6>';
    }
}

function setList($bdd, $tableName, $displayField, $withTitle=false, $selectedId=null)
{
    if ($withTitle){
        ?>
        <option>Select <?php echo $displayField ?></option>
        <?php
    }

    $result = $bdd->query("SELECT * FROM ".$tableName);
    while ($row = $result->fetch_object()){
        ?>
        <option
            <?= $selectedId==$row->id ? 'selected':'' ?>
            value="<?= $row->id ?>"><?= $row->$displayField ?></option>
    <?php
    }
}
