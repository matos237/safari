<?php
    class Location{
        public $location;
        
        function get_location($page){
            if(isset($_SESSION["valid"])){
                switch($page){
                    case "index":
                    case "contact":
                    case "gallery":
                    case "about":
                    case "login":
                        return $this->location = "<li><a href='./admin.php'>Admin</a></li>";
                        break;
                } 
            }
        }

    }
    $Location = new Location();
?>