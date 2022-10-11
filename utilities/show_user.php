<?php

include("../koneksi.php");

$sql = "SELECT * FROM users";
$hasil = $koneksi->query($sql);

if ($hasil->num_rows > 0) {
    echo $hasil->num_rows;
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}
