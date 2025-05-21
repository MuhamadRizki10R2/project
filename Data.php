<?php

session_start();
include("connected.php");

$NO = 1;
$data = mysqli_query($connect, "SELECT * FROM data_siswa");

if (isset($_POST["back"])) {
    header("location:Register.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <link rel="stylesheet" href="Data.css">
</head>
<body>
    <div class="tabel">
        <div class="h1">Data Pendaftar Siswa Baru SMK Telkom Lampung Tahun 2025/2026</div>
        <table border="1" bgcolor="white">
            <tr bgcolor="silver">
                <th>NO</th>
                <th>NAMA</th>
                <th>JURUSAN</th>
                <th>JENIS KELAMIN</th>
                <th>ASAL SEKOLAH</th>
                <th>TANGGAL LAHIR</th>
                <th>AGAMA</th>
                <th>ALAMAT</th>
                <th>NO. TELPON</th>
                <th>EMAIL</th>
            </tr>
            <?php
                while ($d = mysqli_fetch_array($data)) {
            ?>
            <tr>
                <td><?php echo $NO++; ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['jurusan']; ?></td>
                <td><?php echo $d['jenis_kelamin']; ?></td>
                <td><?php echo $d['asal_sekolah']; ?></td>
                <td><?php echo $d['tanggal_lahir']; ?></td>
                <td><?php echo $d['agama']; ?></td>
                <td><?php echo $d['alamat']; ?></td>
                <td><?php echo $d['no_telpon']; ?></td>
                <td><?php echo $d['email']; ?></td>
            </tr>
            <?php
            }
            ?>
        </table>
        <div class="grup-btn">
            <form action="Register.php" method="post">
                <input type="submit" name="back" value="Kembali" class="input-btn">
            </form>
        </div>
    </div>
</body>
</html>