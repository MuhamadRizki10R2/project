<?php

session_start();
include("connected.php");

if (isset($_POST['kembali'])) {
    header("login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>ID BUKU</th>
            <th>NO BUKU</th>
            <th>JUDUL BUKU</th>
            <th>TAHUN TERBIT</th>
            <th>PENULIS</th>
            <th>PENERBIT</th>
            <th>JUMLAH HALAMAN</th>
            <th>HARGA</th>
            <th>GAMBAR</th>
        </tr>
        <?php
            $sql = mysqli_query($connect, "SELECT * FROM buku");
            while ($data = mysqli_fetch_array($sql)) {
        ?>
        <tr>
            <td><?=$data['id_buku']?></td>
            <td><?=$data['no_buku']?></td>
            <td><?=$data['judul_buku']?></td>
            <td><?=$data['tahun_terbit']?></td>
            <td><?=$data['penulis']?></td>
            <td><?=$data['penerbit']?></td>
            <td><?=$data['jumlah_halaman']?></td>
            <td><?=$data['harga']?></td>

            <td>
                <img src="<?=$data['gambar_buku']?>" alt="cover" width="80px" name="pinjam">
            </td>
        </tr>
        <?php
            }
        ?>
    </table>
    <div class="btn">
        <form action="login.php" method="post">
            <input type="submit" name="kembali" value="Kembali">
        </form>
    </div>
</body>
</html>