<?php session_start() ?>

<?php

// Include Database
include_once("config.php");

// Select Query
$result = mysqli_query($mysqli, "SELECT * FROM post WHERE posted='Administrator' ORDER BY id DESC");

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

    <title>Literacy</title>
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="<?= 'login.php' ?>" class="nav-link">Login</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= 'signin.php' ?>" class="nav-link">Signin</a>
                    </li>
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
                        <h1>Literacy</h1>
                        <span class="subheading">Future of Education</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <?php while ($content = mysqli_fetch_array($result)) { ?>
                    <div class="post-preview">
                        <a href="<?= 'detail_post_index.php?id=' . $content['id'] ?>">
                            <h2 class="post-title">
                                <?php echo $content['title']; ?>
                            </h2>
                        </a>
                        <p class="post-subtitle">
                            <!-- <a href="<?= 'detail_post_index.php?id=' . $content['id'] ?>" class="text-primary"><small>READ MORE...</small></a> -->
                        </p>
                        <p class="post-meta">Posted by
                            <a href="#" class="text-primary"><?php echo $content['posted']; ?></a>
                            on <?php echo $content['post_date']  ?></p>
                        <hr>
                    </div>
                <?php } ?>

                <!-- Pager -->
                <div class="clearfix">
                    <a class="btn btn-primary float-right" href="<?= 'login.php' ?>">Login &rarr;</a>
                </div>
            </div>
        </div>
    </div>

    <hr>

    <?php include_once("footer.php"); ?>