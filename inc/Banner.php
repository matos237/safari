<?php
    class Banner{
        public $heading;

        function __construct(){
            
        }
        
        function get_heading($page){
            switch($page){
                case 'index':
                    return $this->heading = "Vitajte na Safari";
                    break;
                case 'kontakt':
                    return $this->heading = "Náš kontakt";
                    break;
                case 'gallery':
                    return $this->heading = "Naša galéria";
                    break;
                case 'about':
                    return $this->heading = "Informácie o nás";
                    break;
            } 
        }

    }
    $Banner = new Banner();
?>