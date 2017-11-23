<?php

//STATUS CRUD
//---get
function getStatus($bdd)
{
    $result = $bdd->query("SELECT * FROM status");
    return $result;
}

//---set
function createStatus($bdd, $status)
{
    $bdd->query("INSERT INTO status (status) VALUES ('" . $status . "')");
}

//---update
function updateStatus($bdd, $id, $status)
{
    $bdd->query("UPDATE status SET status = '" . $status . "' WHERE id=$id");

}

//---delete
function deleteStatus($bdd, $id)
{
    $bdd->query("DELETE FROM status WHERE id=$id");

}

//OFFERS CRUD
//---get
function getTicketsOffersReports($bdd)
{
    $result = $bdd->query("SELECT DISTINCT u.id, u.login, t.*,o.id AS ido,o.*,s.*,r.*
    FROM users u, tickets t, offers o, status s,reports r
    WHERE u.id=t.id_user_ticket
    AND t.id=o.id_ticket
    AND s.id=o.id_status
    AND r.id_offer=o.id");
    return $result;
}

function getTicketsOffers($bdd)
{
    $result = $bdd->query("SELECT DISTINCT u.id, u.login, t.*,o.id AS ido,o.*,s.*
    FROM users u, tickets t, offers o, status s
    WHERE u.id=o.id_user_offer
    AND t.id=o.id_ticket
    AND s.id=o.id_status");
    return $result;
}

function getOneOffer($bdd,$id) {
    $result = $bdd->query("SELECT DISTINCT u.id, u.login, t.*,o.id AS ido,o.*,s.*
    FROM users u, tickets t, offers o, status s
    WHERE u.id=t.id_user_ticket
    AND t.id=o.id_ticket
    AND s.id=o.id_status
    AND o.id=$id");
    return $result;
}

//---set
function createOffer($bdd, $am, $ex, $in, $idt, $iuo, $ids)
{
    $bdd->query("INSERT INTO offers (amount,execTime,insurance,id_ticket,id_user_offer,id_status) VALUES ($am,'" . $ex . "',$in,$idt,$iuo,$ids)");
}

//---update offer's status
function updateOfferStatus($bdd, $ids, $ido)
{
    $bdd->query("UPDATE offers SET id_status =$ids WHERE id=$ido");
}

function updateOffer($bdd, $id, $am, $ex, $in, $ids) {
    $bdd->query("UPDATE offers
    SET amount=$am,execTime='".$ex."',insurance=$in,id_status=$ids WHERE id=$id");
}

//---delete
function deleteOffer($bdd, $id)
{
    $bdd->query("DELETE FROM offers WHERE id=$id");
}

//REPORTS CRUD
//---set
function createReport($bdd, $exp, $rel, $com, $ido)
{
    $bdd->query("INSERT INTO reports (explanation,relation,comitment,id_offer) VALUES ($exp,$rel,$com,$ido)");
}

//---update
function updateReport($bdd, $id, $exp, $rel, $com)
{
    $bdd->query("UPDATE reports SET explanation=$exp,relation=$rel,comitment=$com WHERE id=$id");
}

//---delete
function deleteReport($bdd, $id)
{
    $bdd->query("DELETE FROM reports WHERE id=$id");
}

//TICKET CRUD
//---get
function getTickets($bdd)
{
    $result = $bdd->query("SELECT DISTINCT u.id, u.login, t.* FROM users u, tickets t WHERE u.id=t.id_user_ticket");
    return $result;
}