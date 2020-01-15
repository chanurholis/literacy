<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Literacy | Signin</title>

    <!-- Bootstrap  -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom -->
    <link href="css/literasi.css" rel="stylesheet">

</head>

<body>

    <br>

    <!-- Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <form method="post" action="signin.php">
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Name" autofocus required>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" placeholder="Username" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Email" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password" required>
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <button type="submit" name="signin" class="btn btn-primary">Signin</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


</body>

</html>


<!-- PHP -->
<?php

// Include Database
include_once("config.php");


if (isset($_POST['signin'])) {
    $name = htmlspecialchars($_POST['name']);
    $username = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars(password_hash($_POST['password'], PASSWORD_DEFAULT));

    $check = mysqli_query($mysqli, "SELECT username FROM user WHERE username = '$username'");
    $user = mysqli_fetch_array($check);

    if ($username == $user['username']) {
        echo '<br><div class="alert alert-danger rounded-0 col-5 m-auto text-center" role="alert">
        Terjadi Kesalahan!</div>';
    } else {
        mysqli_query($mysqli, "INSERT INTO user(name, username, email, password, is_active, role_id) VALUES ('$name','$username','$email','$password','1','2')");
        header('location: login.php');
    }
}

?>