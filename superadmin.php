<?php

session_start();
include("connected.php");

if (isset($_POST['tambah'])) {
    $username = $_POST['username'];
    $password = $_POST['passwords'];
    $role = $_POST['roles'];

    mysqli_query($connect, "INSERT INTO users(username, passwords, roles) VALUES('$username', '$password', '$role')");
} else if (isset($_POST['kembali'])) {
    header("login.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SuperAdmin</title>
    <link rel="stylesheet" href="sa.css">
</head>

<body>
    <div class="form-container">
        <h2>Super Admin Punya Kuasa</h2>
        <form action="superadmin.php" method="post">
            <div class="form-grup">
                <input type="text" name="username" placeholder="Username"><br>
            </div>
            <div class="form-grup">
                <input type="password" name="passwords" placeholder="Password"><br>
            </div>
            <div class="form-grup">
                <select name="roles">
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                    <option value="superadmin">Super Admin</option>
                </select>
            </div>
            <div class="button-container">
            <input type="submit" name="tambah" value="Tambah" class="tambah-button">
        </form>
        <form action="login.php" method="post">
            <input type="submit" name="kembali" value="Kembali" class="kembali-button">
        </form>
         </div>
    </div>
</body>

</html>