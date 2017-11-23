<?php
function checkLogin($bdd, $email, $password){
    $result = $bdd->query("SELECT email,password FROM users 
                          WHERE email='$email' AND password='$password'");
    $result->fetch_assoc();
    if ($result->num_rows > 0){
        return true;
    }
    else {
        return false;
    }
}

function getRoles($bdd, $email){
    $result=$bdd->query("SELECT ut.type
    FROM users u, user_types ut, user_types_users utu
    WHERE u.email = '$email'
    AND u.id = utu.id_user
    AND utu.id_user_type = ut.id");
    $array=array();
    foreach($result as $rs){
        array_push($array,$rs['type']);
    }
    return $array;
}