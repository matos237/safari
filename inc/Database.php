<?php
    //Definovanie vstupných credentials do DB
    define("DB_SERVER", "localhost");
    define("DB_NAME", "safari");
    define("DB_USERNAME", "root");
    define("DB_PASSWORD", "");
    //Pripojenie na databázu pomocou PDO
    class Database{
        public $conn;
        function __construct(){

            $this->conn = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME . ";charset=utf8",DB_USERNAME,DB_PASSWORD);
        }
    }

?>