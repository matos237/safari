<?php
    
    require("../Database.php");
    $db = new Database();
    if(isset($_POST["send_contact"])){

        $data = [
        "name"=>$_POST["name"],
        "surname"=>$_PSOT["surname"],
        "mail"=>$_POST["mail"],
        "phone"=>$_POST["phone"], 
        "message"=>$_POST["message"],
        ];

        $query = "INSERT INTO contact (name,surname,email,phone,message) VALUES (:name,:surname,:email,:phone,:message)";
        $query_run = $db->conn->prepare($query);
        $query_run->execute($data);

    }else{
        echo "Nedobre";
    }
?>