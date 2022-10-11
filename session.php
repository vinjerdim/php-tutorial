<?php
    session_start();

    if (!isset($_SESSION) || $_SESSION["username"] == "") {
        header("location: logout.php");
    }
