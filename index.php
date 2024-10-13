<?php
    session_start();
    if ($_SESSION['status']!= "login") {
        header("location:login.php?belum_login");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>
    <h1>SMK Telkom</h1>
    <h5>Selamat Datang, <?php echo $_SESSION['username'];?>! anda telah berhasil login</h5>
    <br>
    <a href="tambah.php">+ Tambah Siswa</a>
    <br>
    <a href="logout.php">Data siswa</a>
    <br>
    <a href="logout.php">Logout</a>
</body>
</html>