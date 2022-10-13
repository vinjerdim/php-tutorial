<?php
include("../session.php");
include("../koneksi.php");

$id = $_POST["id"];

if ($id == $_SESSION["id"]) {
    echo "User sedang aktif";
    exit();
}

$sql = "DELETE FROM users WHERE id = '$id'";
$hasil = $koneksi->query($sql);

if ($hasil === TRUE) {
    header("location: index.php");
} else {
    echo "Error: " . $koneksi->error;
}
