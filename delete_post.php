<?php
include_once("config.php");

$id = $_GET['id'];

mysqli_query($mysqli, "DELETE FROM post WHERE id='$id'");

header('location: post_list.php');
