<?php
    require("../Database.php");
    $db =  new Database();
    if(isset($_POST["delete_gallery"])){
        try{
            $id = $_POST["delete_gallery"];
            $sql = $sql = "DELETE FROM gallery WHERE id_gallery =".$id;
            $db->conn->exec($sql);
            if(isset($_SERVER['HTTP_REFFERER'])){
                header("Location: {$_SERVER['HTTP_REFFERER']}");
            }else{
                header("Location: ../../admin.php");
            }
        }catch(PDOException $e){
            echo "Nastala chyba!";
        }
    
    }
?>