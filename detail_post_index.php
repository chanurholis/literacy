<?php
$id = $_GET['id'];

include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM post WHERE id='$id'");

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

    <title>Native</title>
</head>

<body>
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
                            <?php echo $content['description']; ?>
                            <!-- <a href="<?= 'edit_post.php?id=' . $content['id'] ?>" class="text-info"><small>[Edit]</small></a>
                            <a href="<?= 'delete_post.php?id=' . $content['id'] ?>" onclick="return confirm('Delete post?')" class="text-danger"><small>[Delete]</small></a> -->
                        </p>
                        <p class="post-meta">Posted by
                            <a href="#" class="text-primary"><?php echo $content['posted']; ?></a>
                            on <?php echo $content['post_date']  ?></p>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <hr>

    <?php include_once("footer.php"); ?>