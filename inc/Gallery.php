<?php
    class Galeria{
        public $db;

        function get_galeria(){

            try{
                $this->db = new Database();
                $query = $this->db->conn->query("SELECT * FROM galeria");
                $galeria = $query->fetchAll(PDO::FETCH_OBJ);
                for ($i=0;$i<count($galeria);$i++){
                    if($i<=(count($galeria)/2)){
                        echo '<div class="col-gallery">';
                        echo "<img src=".$galeria[$i]->path." class='img_gallery'>";
                        echo $galeria[$i]->name;
                        echo '</div>';
                    }
                    else{
                        echo '<div class="col-gallery">';
                        echo "<img src=".$galeria[$i]->path." class='img_gallery'>";
                        echo $galeria[$i]->name;
                        echo '</div>';
                    }
                }

            }catch(PDOException $e){
                print("Nastala nejaká chyba");
            }
        }
    }
    $galeria = new galeria();
?>