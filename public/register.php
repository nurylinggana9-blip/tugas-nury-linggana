<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Karena tidak pakai database, kita hanya menampilkan hasil "berhasil daftar"
    $_SESSION["registered"] = true;
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>

<h2>Register</h2>

<form method="POST">
    <label>Username</label><br>
    <input type="text" name="username" required><br><br>

    <label>Password</label><br>
    <input type="password" name="password" required><br><br>

    <button type="submit">Daftar</button>
</form>

<p>
    Sudah punya akun? <a href="login.php">Login</a>
</p>

</body>
</html>
