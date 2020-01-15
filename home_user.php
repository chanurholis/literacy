<?php session_start() ?>

<?php
$id = $_GET['id'];

include_once("config.php");

$result_user = mysqli_query($mysqli, "SELECT *FROM user WHERE id='$id'");

$user = mysqli_fetch_array($result_user);

$name = $user['name'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?= 'vendor/bootstrap/css/bootstrap.min.css' ?>">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= 'css/literasi.css' ?>">

    <title><?= $name ?></title>
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
        <a class="navbar-brand text-light" href="<?= 'home_admin.php' ?>">Literacy</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link text-light" href="<?= 'home_admin.php' ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="<?= 'post_admin.php' ?>">Post</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="<?= 'post_list_admin.php' ?>"><?= $_SESSION['name'] ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="<?= 'user.php' ?>">User</a>
                </li>
            </ul>
            <a style="text-decoration:none;" class="nav-link text-light" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                Setting
            </a>
            <div class="collapse" id="collapseExample">
                <a class="nav-link text-light" href="<?= 'logout.php' ?>">Logout</a>
            </div>
        </div>
    </nav>

    <br>
    <br>
    <div class="card m-auto" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $name ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?= $user['username'] ?></h6>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
    </div>

    <?php include_once("footer.php") ?>