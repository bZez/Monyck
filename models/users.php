<?php

    //GETTERS

function getUsersList($bdd) {
	    $result = $bdd->query('SELECT s.id,s.skillname,u.* FROM skills s,users u WHERE s.id=u.`#id_skills` ');
        return $result;
	}

function getOneUser($bdd,$id) {
    $result = $bdd->query("SELECT s.id,s.skillname,u.* FROM skills s,users u WHERE s.id=u.`#id_skills` AND u.id='".$id."'");
    return $result;
}

function getSkillsList($bdd) {
        $result = $bdd->query('SELECT * FROM skills');
        return $result;
    }


    //SETTERS

function createUser($bdd,$l,$fn,$ln,$sk,$m,$pw) {
    $bdd->query("INSERT INTO users (firstname, lastname, email,login, password, `#id_skills`) 
            VALUES  ('".$fn."','".$ln."','".$m."','".$l."','".$pw."',$sk)");
}

function editUser($bdd,$id,$l,$c,$sk) {
    $bdd->query("UPDATE users SET login = '".$l."', credit = '".$c."', `#id_skills` = '".$sk."' WHERE users.id=$id");
}

    //DELETER

function deleteUser($bdd,$id) {
    $bdd->query("DELETE FROM users WHERE users.id=$id");
}