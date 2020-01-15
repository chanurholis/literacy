<?php session_start() ?>
<?php
include_once("config.php");

$id = $_GET['id'];

$result = mysqli_query($mysqli, "SELECT * FROM post WHERE id='$id'");
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Literacy | Edit</title>

    <!-- Bootstrap  -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom -->
    <link rel="stylesheet" href="<?= 'css/literasi.css' ?>">

    <!-- JS -->
    <script src="vendor/ckeditor/ckeditor.js"></script>

</head>

<body>
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
                <?php while ($edit = mysqli_fetch_array($result)) { ?>
                    <form class="form-group" action="edit_post_admin.php" method="post">
                        <input name="id" value="<?= $edit['id'] ?>" type="hidden">
                        <input type="text" name="title" value="<?= $edit['title'] ?>" class="form-control rounded-0" placeholder="Title" required autofocus>
                        <br>
                        <input style="height:70px" class="form-control rounded-0" name=" description" value="<?= $edit['description'] ?>" required>
                        <br>
                        <button type="submit" name="edit" class="btn btn-primary rounded-0">Edit</button>
                    </form>
                <?php } ?>
            </div>
        </div>
    </div>

</body>

</html>


<!-- PHP -->
<?php
if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $title = htmlspecialchars($_POST['title']);
    $desc = $_POST['description'];

    mysqli_query($mysqli, "UPDATE post SET id='$id',title='$title',description='$desc' WHERE id='$id'");

    header('location: post_list_admin.php');
}
?>