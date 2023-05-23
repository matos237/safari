<?php
    require("../Database.php");
    $db =  new Database();
    if(isset($_POST["delete_qna"])){
        try{
            $id = $_POST["delete_qna"];
            $sql = $sql = "DELETE FROM qna WHERE id_qna =".$id;
            $db->conn->exec($sql);
            if(isset($_SERVER["HTTP_REFFERER"])){
                header("Location: {$_SERVER["HTTP_REFFERER"]}");
            }else{
                header("Location: ../../admin.php");
            }
        }catch(PDOException $e){
            echo "Nastala chyba!";
        }
    
    }
?>