<?php

//GETTERS

function getUsersList($bdd)
{
    $result = $bdd->query('SELECT u.*,utu.*,ut.*, GROUP_CONCAT(ut.type SEPARATOR \' <br> \') multitype FROM users u, user_type_user utu, users_type ut WHERE u.id=utu.id_user AND ut.id=utu.id_user_type GROUP BY u.fname');
    return $result;
}

function getUserTypeList($bdd)
{
    $result = $bdd->query('SELECT * FROM users_type');
    return $result;
}


function getOneUser($bdd, $id)
{
    $result = $bdd->query("SELECT * FROM users WHERE id=$id");
    return $result;
}

function getOneUserType($bdd, $id)
{
    $result = $bdd->query("SELECT * FROM users_type WHERE id=$id");
    return $result;
}

function getSkillsList($bdd)
{
    $result = $bdd->query('SELECT * FROM skills');
    return $result;
}

//SETTERS

function createUser($bdd, $l, $fn, $ln, $bd, $m, $pw, $tid)
{
    $bdd->query("INSERT INTO users (login, fname, lname, bdate, mail, pw) 
            VALUES  ('" . $l . "','" . $fn . "','" . $ln . "','" . $bd . "','" . $m . "','" . $pw . "')");
    $uid = $bdd->insert_id;
    addTypeToUser($bdd, $uid, $tid);
}

function addTypeToUser($bdd, $uid, $tid)
{
    $trim = rtrim($tid, ",");
    $explode = explode(',', $trim);

    foreach ($explode as $tid) {
        $sql = $bdd->query("INSERT INTO `user_type_user`(`id_user`, `id_user_type`) VALUES ($uid,$tid)");

        if ($sql) {
            echo "it's good";

        } else
            echo "no good", mysqli_error();

    }
}


function editUser($bdd, $id, $l, $fn, $ln, $bd, $m, $pw)
{
    $bdd->query("UPDATE users SET login = '" . $l . "', fname = '" . $fn . "', lname = '" . $ln . "',bdate = '" . $bd . "',mail = '" . $m . "',pw = '" . $pw . "'  WHERE users.id=$id");
}

function editUserType($bdd, $id, $t)
{
    $bdd->query("UPDATE users_type SET type = '" . $t . "' WHERE users_type.id=$id");
}

//USER TYPE
function createUserType($bdd, $t)
{
    $bdd->query("INSERT INTO users_type (type) 
              VALUES ('" . $t . "')");
}

//DELETER

function deleteUser($bdd, $id)
{
    $bdd->query("DELETE u.*, utu.* 
FROM users u 
LEFT JOIN user_type_user utu
ON u.id = utu.id_user 
WHERE u.id = $id");
}

function deleteUserType($bdd, $id)
{
    $bdd->query("DELETE FROM users_type WHERE users_type.id=$id");
}