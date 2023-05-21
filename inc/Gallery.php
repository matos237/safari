<?php
    class Galeria{
        public $db;

        function get_galeria(){

            try{
                $this->db = new Database();
                $query = $this->db->conn->query("SELECT * FROM gallery");
                $galeria = $query->fetchAll(PDO::FETCH_OBJ);
                return $galeria;
            }
            catch(PDOException $e){
                print("Nastala nejaká chyba");
            }
        }
    }
    $Galeria = new Galeria();
?>