<?php

function getTicketList($bdd) {
    $result = $bdd->query('
SELECT o.*,t.*,u.id,st.*,u.firstname,s.* 
FROM offers o,tickets t,users u,skills s, status st
WHERE o.id=t.`#id_offer` 
AND u.id=t.`#id_user` 
AND s.id=t.`#id_skills`
AND st.id=t.`#status`');
    return $result;
}

//  id 	#id_ticket 	#id_user 	#amount 	time 	insurance
// #id 	description 	#id_offer 	creationDate 	#status 	#id_user 	#id_skills
//  id 	firstname