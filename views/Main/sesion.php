<?php
    session_start();

    if(!isset($_SESSION["user_nom"])) {
        header("location: ../../index.php");
    }

    $user_nom = $_SESSION["user_nom"];
    $user_ape = $_SESSION["user_ape"];
?>