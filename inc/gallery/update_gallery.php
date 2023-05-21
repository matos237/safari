<?php
    require("../config.php");
    $galeria = $Galeria->get_galeria();
    $db =  new Database();
    if(isset($_POST["update_gallery"])){
        $data = [
            "id" => $_POST["form_id"],
            "name" => $_POST["update_name"],
            "path" => $_POST["update_path"],
        ];
        foreach ($galeria as $g){
            if($g->id==$data["id"]){
                if(empty($data["name"])){
                    $data["name"] = $g->name;
                }
                if(empty($data["path"])){
                    $data["path"] = $g->path;
                }
            }
        }
        try{
            $query =  "UPDATE gallery SET name=:name, path=:path WHERE id_gallery=:id";
            $query_run = $db->conn->prepare($query);
            $query_run->execute($data);
            if(isset($_SERVER['HTTP_REFFERER'])){
                header("Location: {$_SERVER['HTTP_REFFERER']}");
            }else{
                header("Location: ../../admin.php");
            }
        
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    
    }else{
        echo "Nastala chyba.";
    }
?>