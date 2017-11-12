<?php

$_SESSION['flash'] = '<h1>Ticket créé avec succès !</h1>';

header('Location:/'.$project_name.'/index.php?ticket=list');
