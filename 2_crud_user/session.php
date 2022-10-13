<?php
session_start();

if (!isset($_SESSION) || $_SESSION["id"] == "") {
    header("location: logout.php");
}
