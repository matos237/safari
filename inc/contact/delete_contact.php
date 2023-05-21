<?php
    require("../Database.php");
    $db =  new Database();
    if(isset($_POST["delete_contact"])){
        try{
            $id = $_POST["delete_contact"];
            $sql = $sql = "DELETE FROM contact WHERE id_contact =".$id;
            $db->conn->exec($sql);
        }catch(PDOException $e){
            echo "Nastala chyba.";
        }
    
    }
?>