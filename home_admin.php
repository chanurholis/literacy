<?php session_start(); ?>

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

    <title>Literacy | smpn1sbg</title>
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
        <a class="navbar-brand text-light" href="<?= '' ?>">Literacy</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link text-light" href="<?= '' ?>">Home</a>
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
            <a style="text-decoration:none;" class="nav-link text-light text-left" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                Setting
            </a>
            <div class="collapse" id="collapseExample">
                <a class="nav-link text-light" href="<?= 'logout.php' ?>">Logout</a>
            </div>
        </div>
    </nav>


    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <br>
                <br>
                <br>
                <div class="post-preview">
                    <a href="post.html">
                        <h2 class="post-title text-center text-muted mt-5">
                            Selamat Datang <?= $_SESSION['name'] ?>
                        </h2>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <?php include_once("footer.php"); ?>