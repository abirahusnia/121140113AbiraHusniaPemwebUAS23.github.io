<?php
include("konfigurasi.php");
session_start();
 
if (isset($_SESSION['username'])) {
        header("Location: index.php");
        exit();
}
 
if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confpw = $_POST['confpw'];
        
        if ($password == $confpw) {
                $sql = "SELECT * FROM users WHERE email='$email'";
                $result = mysqli_query($konfigurasi, $sql);
                if (!$result->num_rows > 0) {
                $sql = "INSERT INTO users (username, email, password)
                        VALUES ('$username', '$email', '$password')";
                $result = mysqli_query($konfigurasi, $sql);
                if ($result) {
                        echo "<script>alert('login berhasil!')</script>";
                        $username = "";
                        $email = "";
                        $_POST['password'] = "";
                        $_POST['confpw'] = "";
                } else {
                        echo "<script>alert('Terjadi kesalahan.')</script>";
                }
                } else {
                echo "<script>alert('Email Sudah Terdaftar.')</script>";
                }
        } else {
                echo "<script>alert('Password Salah')</script>";
        }
}
?>

<!DOCTYPE html>
<html>

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="index.css">
        <title>Register</title>
</head>

<body>
        <div class="container">
                <form action="register.php" method="POST" class="login-email">
                        <p class="login-text" style="font-size: 3rem; font-weight: 600;">Register</p>
                        <label for="username">Username : </label><br>
                        <input type="text" placeholder="Username" name="username" required><br><br>
                        <label for="email">E-mail : </label><br>
                        <input type="email" placeholder="Email" name="email" required><br><br>
                        <label for="password">Password : </label><br>
                        <input type="password" placeholder="Password" name="password" required><br><br>
                        <label for="confpw">Ulangi Password : </label><br>
                        <input type="password" placeholder="Confirm Password" name="confpw" required><br><br>
                        <button name="submit" class="btn">Login</button><br><br>
                        <p class="login-register-text">Anda sudah punya akun? <a href="index.php">Login</a></p>
                </form>
        </div>
</body>

</html>