<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Literacy | Post</title>

    <!-- Bootstrap  -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom -->
    <link rel="stylesheet" href="<?= 'css/literasi.css' ?>">

    <!-- JS -->
    <script src="vendor/ckeditor/ckeditor.js"></script>

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

    <!-- Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <form class="form-group" action="post.php" method="post">
                    <input type="text" name="title" class="form-control rounded-0" placeholder="Title" required autofocus>
                    <br>
                    <textarea name="description" id="editor1" rows="10" cols="80" required>
                    </textarea>
                    <script>
                        CKEDITOR.replace('editor1');
                    </script>
                    <br>
                    <button type="submit" name="submit" class="btn btn-primary rounded-0">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <?php include_once("footer.php"); ?>

</body>

</html>


<!-- PHP -->
<?php
if (isset($_POST['submit'])) {
    $title = htmlspecialchars($_POST['title']);
    $description = $_POST['description'];
    $post_date = date('j F Y');
    $posted = $_SESSION['name'];

    // Include Database
    include_once("config.php");

    // Insert Query
    $result = mysqli_query($mysqli, "INSERT INTO post(title,description,post_date,posted) VALUES ('$title','$description','$post_date','$posted')");

    header('location: home_admin.php');
}

?>