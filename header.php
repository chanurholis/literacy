<?php session_start() ?>

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

    <title>Native</title>
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
        <a class="navbar-brand" href="#">Native</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon text-light"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link text-dark" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="<?= 'post.php' ?>">Post</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="<?= 'post_list.php' ?>"><?= $_SESSION['name'] ?></a>
                </li>
            </ul>
            <a style="text-decoration:none;" class="nav-link text-dark" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                Setting
            </a>
            </p>
            <div class="collapse" id="collapseExample">
                <ul class="navbar-nav">
                    <a class="nav-link text-dark" href="<?= 'logout.php' ?>">Logout</a>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/reading.jpg')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="site-heading">
                        <h1><?= $_SESSION['name'] ?></h1>
                        <span class="subheading">A Blog Theme by Start Bootstrap</span>
                    </div>
                </div>
            </div>
        </div>
    </header>