<?php

//GETTERS

function getUsersList($bdd)
{
    $result = $bdd->query('SELECT u.*,utu.*,ut.id AS utid, ut.type, GROUP_CONCAT(ut.type SEPARATOR \' <br> \') multitype 
FROM users u, user_type_users utu, user_types ut 
WHERE u.id=utu.id_user 
AND ut.id=utu.id_user_type 
GROUP BY u.id');
    return $result;
}

function getUserTypeList($bdd)
{
    $result = $bdd->query('SELECT * FROM user_types');
    return $result;
}

function getUserByType($bdd)
{
    $result = $bdd->query("SELECT ut.*,u.id,u.login,utu.*, 
GROUP_CONCAT(u.login SEPARATOR ' <br> ') userbytype
FROM users u, user_type_users utu, user_types ut 
WHERE u.id=utu.id_user 
AND ut.id=utu.id_user_type 
GROUP BY ut.id");
    if (mysqli_num_rows($result) == 0) {
        getUserTypeList($bdd);
    } else { return $result;}
    }

function getOneUser($bdd, $id)
{
    $result = $bdd->query("SELECT u.*,utu.*,ut.id AS utid, ut.type, GROUP_CONCAT(ut.type SEPARATOR ' <br> ') multitype 
FROM users u, user_type_users utu, user_types ut 
WHERE u.id=utu.id_user 
AND ut.id=utu.id_user_type
AND u.id=$id 
GROUP BY u.id");
    return $result;
}

function getOneUserType($bdd, $id)
{
    $result = $bdd->query("SELECT * FROM user_types WHERE id=$id");
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
        $sql = $bdd->query("INSERT INTO `user_type_users`(`id_user`, `id_user_type`) VALUES ($uid,$tid)");

        if ($sql) {
            echo "it's good";

        } else
            echo "no good", mysqli_error();

    }
}


function editUser($bdd, $id, $l/*, $fn, $ln, $bd, $m, $pw*/)
{
    $bdd->query("UPDATE users 
SET login = '" . $l . "'
WHERE users.id=$id");
}

function editUserType($bdd, $id, $t)
{
    $bdd->query("UPDATE user_types SET type = '" . $t . "' WHERE user_types.id=$id");
}

//USER TYPE
function createUserType($bdd, $t)
{
    $bdd->query("INSERT INTO user_types (type) 
              VALUES ('" . $t . "')");
}

//DELETER

function deleteUser($bdd, $id)
{
    $bdd->query("DELETE u.*, utu.* 
FROM users u 
LEFT JOIN user_type_users utu
ON u.id = utu.id_user 
WHERE u.id = $id");
}

function deleteUserType($bdd, $id)
{
    $bdd->query("DELETE FROM user_types WHERE user_types.id=$id");
}