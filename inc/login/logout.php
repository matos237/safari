<?php
    session_start();
     unset($_SESSION["name"]);
     echo "Boli ste odhlásení";
    //session_destroy(); 
    //header('URL = index.php');
?>