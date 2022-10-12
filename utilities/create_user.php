<?php

include("koneksi.php");

$username = "marvin";
$password = password_hash("coba", PASSWORD_DEFAULT);
$level = "admin";

echo $password;

$sql = "INSERT INTO users (username, password, level) VALUES ('$username', '$password', '$level')";
$hasil = $koneksi->query($sql);

if ($hasil === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}
