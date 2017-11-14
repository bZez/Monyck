<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo $project_name ?></title>
    <script src="views/js/jquery-3.2.1.min.js"></script>
</head>
<body style="text-align:center">
<header>
    <h1><?php echo $project_name ?></h1>
</header>
<h3>
    <a href="<?php $project_name ?>index.php">Home</a>
    <a href="<?php $project_name ?>index.php?user=list">Users</a>
    <a href="<?php $project_name ?>index.php?type=list">Userstype</a>
    <a href="<?php $project_name ?>index.php?ticket=list">Tickets</a>
    <a href="<?php $project_name ?>index.php?transfer=list">$$$</a>
</h3>