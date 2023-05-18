<?php
    
    require('../Database.php');
    $db = new Database();
    if(isset($_POST['odoslat'])){

        $data = [
        'name'=>$_POST['name'],
        'email'=>$_POST['email'], 
        'sprava'=>$_POST['sprava'],
        ];

        $query = "INSERT INTO kontakt (name,email,sprava) VALUES (:name,:email,:sprava)";
        $query_run = $db->conn->prepare($query);
        $query_run->execute($data);

    }else{
        echo 'Nedobre';
    }
?>