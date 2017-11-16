<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo $project_name ?></title>
    <script src="views/js/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="views/css/main.css">
</head>
<body style="text-align:center">
<header>
    <h1><?php echo $project_name ?></h1>

    <h3>≡
        <a href="<?php $project_name ?>index.php">Home</a> ≡
        <a href="<?php $project_name ?>index.php?user=list">Users</a> ≡
        <a href="<?php $project_name ?>index.php?type=userlist">Usertypes</a> ≡
        <a href="<?php $project_name ?>index.php?skill=list">Skills</a> ≡
        <a href="<?php $project_name ?>index.php?ticket=list">Tickets</a> ≡
        <a href="<?php $project_name ?>index.php?offer=list">Offers</a> ≡
    </h3>

</header>
