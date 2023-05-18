<?php
    class Database{
        public $conn;
        function __construct(){

            $this->conn = new PDO('mysql:host=localhost;dbname=safari;charset=utf8','root','');
        }
    }

?>