<?php
    class Galeria{
        public $db;

        function get_galeria(){

            try{
                $this->db = new Database();
                $query = $this->db->conn->query("SELECT * FROM galeria");
                $galeria = $query->fetchAll(PDO::FETCH_OBJ);
                $temp_i = 0;
                for ($i=0;$i<count($galeria);$i++){
                    $temp_i = $temp_i + 1; 
                    if($temp_i%4==1){
                        echo '<div class="row">';
                        echo '<div class="col-25 galeria text-white text-center" style ="background-image:url(\''.$galeria[$i]->image.'\');"'.'>';
                        echo $galeria[$i]->name;
                        echo '</div>';
                    }
                    elseif($temp_i%4==0){
                        echo '<div class="col-25 galeria text-white text-center" style ="background-image:url(\''.$galeria[$i]->image.'\');"'.'>';
                        echo $galeria[$i]->name;
                        echo '</div>';
                        echo '</div>';
                    }
                    else{
                        echo '<div class="col-25 galeria text-white text-center" style ="background-image:url(\''.$galeria[$i]->image.'\');"'.'>';
                    echo $galeria[$i]->name;
                    echo '</div>';
                    }
                }

            }catch(PDOException $e){
                print($e->getMessage());
            }
        }
    }
    $galeria = new galeria();
?>