<?php 
include_once("config.php");

$id = $_GET['id'];

$result = mysqli_query($mysqli, "SELECT * FROM user WHERE id='$id'");

$user = mysqli_fetch_array($result);

$action = NULL;

if ($user['is_active'] == 1) {
    $action = 0;
    mysqli_query($mysqli, "UPDATE user SET is_active='$action' WHERE id='$id'");
    header('location: user.php');
} else {
    $action = 1;
    mysqli_query($mysqli, "UPDATE user SET is_active='$action' WHERE id='$id'");
    header('location: user.php');
}

?>