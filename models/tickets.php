<?php
//GETTERS

function getSkills($bdd)
{
    $result = $bdd->query("SELECT * FROM skills");
    return $result;
}

;

function getTickets($bdd)
{
    $result = $bdd->query("SELECT * FROM tickets");
    return $result;
}

;

function getOneSkill($bdd, $id)
{
    $result = $bdd->query("SELECT * FROM skills WHERE id=$id");
    return $result;
}

;

function getSkillsWithUsers($bdd)
{
    $result = $bdd->query("");
    return $result;
}

//SETTERS

function createSkill($bdd, $sk)
{
    $bdd->query("INSERT INTO skills (language) VALUES ('$sk');");
}

;

function deleteSkill($bdd, $id)
{
    $bdd->query("DELETE FROM skills WHERE id = $id");
}

;

function editSkill($bdd, $id, $sk)
{
    $bdd->query("UPDATE skills SET language = '" . $sk . "' WHERE id=$id");
}

;

function createTicket($bdd, $tt, $ds, $cd, $et, $idu, $ids)
{
    $bdd->query("INSERT INTO tickets (title, description, creationDate, expTime, id_user, id_skill)
VALUES ('$tt','$ds','$cd','$et','$idu','$ids');");
}

;