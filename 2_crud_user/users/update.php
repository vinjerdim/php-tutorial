<?php
include("../session.php");
include("../koneksi.php");

$id = $_POST["id"];
$password_1 = $_POST["password_1"];
$password_2 = $_POST["password_2"];
$level = $_POST["level"];

if ($password_1 != $password_2) {
    echo "Password tidak cocok";
    exit();
}

$password = password_hash($password_1, PASSWORD_DEFAULT);

$sql = "UPDATE users SET password = '$password', level = '$level' WHERE id = '$id'";
$hasil = $koneksi->query($sql);

if ($hasil === TRUE) {
    header("location: index.php");
} else {
    echo "Error: " . $koneksi->error;
}
