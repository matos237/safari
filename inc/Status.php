<?php
    class Status{
        public $status;

        
        function get_status(){
            if(!isset($_SESSION["valid"])){
                return "<a href='./login.php'>Prihlásenie</a>";
            }
            else{
                return "<a href='./inc/login/logout.php'>Odhlásenie</a>";
            }
        }
    }
    $Status = new Status();
?>