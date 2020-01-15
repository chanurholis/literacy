<?php session_start() ?>

<!-- PHP -->
<?php
$posted = $_SESSION['name'];

// Include Database
include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM post WHERE posted='$posted' ORDER BY id DESC");
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

    <title>Literacy | <?= $_SESSION['name'] ?></title>
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

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <?php while ($content = mysqli_fetch_array($result)) { ?>
                    <div class="post-preview">
                        <a href="<?= 'detail_post_admin.php?id=' . $content['id'] ?>">
                            <h2 class="post-title">
                                <?php echo $content['title']; ?>
                            </h2>
                        </a>
                        <p class="post-subtitle">
                            <?php echo $content['description']; ?>
                            <a href="<?= 'detail_post_admin.php?id=' . $content['id'] ?>" class="text-primary"><small>READ MORE...</small></a>
                            <a href="<?= 'edit_post_admin.php?id=' . $content['id'] ?>" class="text-info"><small>[Edit]</small></a>
                            <a href="<?= 'delete_post.php?id=' . $content['id'] ?>" onclick="return confirm('Delete post?')" class="text-danger"><small>[Delete]</small></a>
                        </p>
                        <p class="post-meta">Posted by
                            <a href="#" class="text-primary"><?php echo $content['posted']; ?></a>
                            on <?php echo $content['post_date']  ?></p>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <?php include_once("footer.php"); ?>