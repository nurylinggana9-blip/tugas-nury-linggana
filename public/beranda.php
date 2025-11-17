<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Beranda</title>
</head>
<body>

<h2>Selamat datang, <?= $_SESSION["user"] ?>!</h2>

<p>Ini adalah halaman beranda.</p>

<a href="logout.php">Logout</a>

</body>
</html>
