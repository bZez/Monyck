<?php
if(isset($_POST['email'],$_POST['password'])){
    $_SESSION['email']=$_POST['email'];
    $_SESSION['password']=$_POST['password'];
}
if(isset($_SESSION['email'], $_SESSION['password'])) {
    if (checkSession($bdd)) {
        include('views/headers/default.php');
    }
} else {
    ?>
    <form method="POST" name="login" action="index.php">

        <input type="email" name="email" required placeholder="Mail address..."><br>
        <input type="password" name="password" required placeholder="Password...">
        <br>
        <input type="submit" value="Login" >

    </form>
    <?php
}


?>