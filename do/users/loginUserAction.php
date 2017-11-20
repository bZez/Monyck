<?php
if (isset($_POST['email'], $_POST['password'])) {
    $result = $bdd->query("SELECT u.*,utu.*, ut.*, GROUP_CONCAT(ut.type SEPARATOR ',') multitype
                          FROM users u, user_types_users utu, user_types ut
                          WHERE u.email='" . $_POST['email'] . "'
                          AND u.password='" . $_POST['password'] . "'
                          AND ut.id=utu.id_user_type
                          AND u.id=utu.id_user");
    $line = $result->fetch_assoc();
    $_SESSION['id'] = $line['id'];
    $_SESSION['login'] = $line['login'];
    $_SESSION['role'] = $line['multitype'];
    if ($result->num_rows > 0) {
        header('Location:/' . $project_path . '/index.php');
    } else {
        echo 'loginUserAction pas bon';
    }
}
else {
    header('Location:/' . $project_path . '/index.php?login');
}
