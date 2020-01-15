<?php session_start() ?>

<?php
include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM user WHERE role_id='2'");
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

    <title>Literacy | User</title>
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

    <div class="col-8 m-auto">
        <br>
        <br>
        <br>
        <table class="table border">
            <thead class="thead-dark">
                <tr>
                    <th class="border text-center" width="20px" scope="col">No</th>
                    <th class="border" scope="col">Username</th>
                    <th class="border" scope="col">Email</th>
                    <th class="border text-center" scope="col">Status</th>
                    <th class="border text-center" scope="col">Role</th>
                    <th class="border text-center" scope="col">Action</th>
                </tr>
            </thead>
            <?php
            $no = 1;
            while ($user = mysqli_fetch_array($result)) { ?>
                <?php
                    $status = NULL;
                    $action = NULL;
                    if ($user['is_active'] == 1) {
                        $status = 'Active';
                    } elseif ($user['is_active'] == 0) {
                        $status = 'Off';
                    }
                    $role = NULL;
                    if ($user['role_id'] == 1) {
                        $role = 'Admin';
                    } else {
                        $role = 'Member';
                    }
                    if ($user['is_active'] == 1) {
                        $action = 'Nonactive';
                    } else {
                        $action = 'Active';
                    }
                    ?>
                <tbody>
                    <tr>
                        <td class="border text-center" scope="row"><?= $no++ ?></td>
                        <td class="border" scope="row"><a style="text-decoration:none;"style="text-decoration:none;" href="<?= 'home_user.php?id=' . $user['id'] ?>"><?= $user['username'] ?></a></td>
                        <td class="border" scope="row"><?= $user['email'] ?></td>
                        <td class="border text-center" scope="row"><?= $status ?></td>
                        <td class="border text-center" scope="row"><?= $role ?></td>
                        <td class="border text-center" scope="row"><a style="text-decoration:none;" class="btn btn-outline-info" onclick="return confirm('Sure?')" href="<?= 'action_user.php?id=' . $user['id'] ?>"><?= $action ?></a></td>
                    </tr>
                </tbody>
            <?php } ?>
        </table>
    </div>

    <?php include_once("footer.php"); ?>