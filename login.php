<!-- Session -->
<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

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
                <form method="post" action="login.php">
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" placeholder="Username" autofocus>
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
                        <button type="submit" name="login" class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>


<!-- PHP -->
<?php
if (isset($_POST['login'])) {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    // Include Database
    include_once("config.php");

    $user = mysqli_query($mysqli, "SELECT * FROM user WHERE username='$username'");
    $row = mysqli_fetch_array($user);

    if ($row) {
        if ($row['is_active'] == 1) {
            if (password_verify($password, $row['password'])) {
                $_SESSION['name'] = $row['name'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['role_id'] = $row['role_id'];
                $_SESSION['status'] = 'login';

                header('location: action_login.php');
            } else {
                echo '<br><div class="alert alert-danger rounded-0 col-5 m-auto text-center" role="alert">
                Terjadi Kesalahan!</div>';
            }
        } else {
            echo '<br><div class="alert alert-danger rounded-0 col-5 m-auto text-center" role="alert">
            Terjadi Kesalahan!</div>';
        }
    } else {
        echo '<br><div class="alert alert-danger rounded-0 col-5 m-auto text-center" role="alert">
        Terjadi Kesalahan!</div>';
    }
}

?>