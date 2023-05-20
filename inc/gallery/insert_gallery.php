<?php
    require("../Database.php");

    $db = new Database();

    if(isset($_POST["insert_gallery"])){

        $data = [
            "name"=>$_POST["name"],
            "path"=>$_POST["path"], 
        ];

        $query = "INSERT INTO gallery (name,path) VALUES (:name,:path)";
        $query_run = $db->conn->prepare($query);
        $query_run->execute($data);

    }else{
        echo 'Niečo sa pokazilo';
    }
?>