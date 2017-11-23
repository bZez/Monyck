<?php
if (isset($_POST['email'], $_POST['password'])) {

    $emailClean=sanitizeText($_POST['email']);
    $passwordClean=$_POST['password'];

    $check = checkLogin($bdd, $emailClean, $passwordClean);
    $roles = getRoles($bdd, $emailClean);
    foreach($roles as $key => $value){
        echo $key." ".$value."<br>";
    }
    if ($check) {
        $_SESSION['email']=$emailClean;
        $_SESSION['roles']=$roles;
        header('Location:/' . $project_path . '/index.php');
    } else {
        echo 'Email/password not ok';
    }
}
else {
    header('Location:/' . $project_path . '/index.php?login');
}
