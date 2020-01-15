<?php session_start() ?>

<?php
if ($_SESSION['status'] == 'login') {
    if ($_SESSION['role_id'] == 1) {
        header('location: home_admin.php');
    } else {
        header('location: home.php');
    }
} else {
    header('location: login.php');
}

?>