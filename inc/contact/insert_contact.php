<?php
    
    require("../Database.php");
    $db = new Database();
    if(isset($_POST["send_contact"])){

        $data = [
        "name"=>$_POST["name"],
        "surname"=>$_POST["surname"],
        "mail"=>$_POST["mail"],
        "phone"=>$_POST["phone"], 
        "message"=>$_POST["message"],
        ];

        $query = "INSERT INTO contact (name,surname,mail,phone,message) VALUES (:name,:surname,:mail,:phone,:message)";
        $query_run = $db->conn->prepare($query);
        $query_run->execute($data);

    }else{
        echo "Nedobre";
    }
?>