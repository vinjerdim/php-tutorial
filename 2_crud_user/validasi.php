<?php
include("koneksi.php");

$username = $_POST["username"];
$password = $_POST["password"];

$sql = "SELECT * FROM users WHERE username = '$username'";
$hasil = $koneksi->query($sql);

if ($hasil->num_rows > 0) {
    $data = $hasil->fetch_array();

    if (password_verify($password, $data["password"])) {
        session_start();
        $_SESSION["id"] = $data["id"];
        $_SESSION["username"] = $data["username"];
        $_SESSION["level"] = $data["level"];
        header("location: index.php");
    }
}

echo "Username atau password invalid";
