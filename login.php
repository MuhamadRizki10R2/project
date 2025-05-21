<?php

session_start();
include("connected.php");

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $passwords = $_POST['passwords'];

    $sql = "SELECT * FROM users WHERE username='$username' AND passwords='$passwords'";
    $result = mysqli_query($connect, $sql);

    if ($result->num_rows > 0) {
        $data = mysqli_fetch_assoc($result);

        if ($data['roles'] == 'user') {
            header("Location: index.php");
        } else if ($data['roles'] == 'admin') {
            header("Location: admin.php");
        }
        else {
            header("Location:superadmin.php");
        }
    } else {
        echo 'Login Gagal';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="box">
        <h2>Login aja dulu masalah berhasilnya belakangan</h2>
        <form action="login.php" method="post">
            <div class="grup-input">
                <input type="text" name="username" placeholder="Masukkan username" required><br>
            </div>
            <div class="grup-input">
                <input type="text" name="passwords" placeholder="Masukkan Password" required><br>
            </div>
            <div class="btn-custom">
                <input type="submit" name="login" value="Login" class="login-btn">
            </div>
        </form>
    </div>
</body>
</html>