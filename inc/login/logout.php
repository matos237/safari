<?php
    session_start();
    unset($_SESSION["name"]);
    unset($_SESSION["valid"]);
    header("Location: ../../logout.php");

?>