<?php
    require("../Database.php");
    $db =  new Database();
    if(isset($_POST["delete_gallery"])){
        try{
            $id = $_POST["delete_gallery"];
            $sql = $sql = "DELETE FROM gallery WHERE id_gallery =".$id;
            $db->conn->exec($sql);
        }catch(PDOException $e){
            echo "Nastala chyba!";
        }
    
    }
?>