<?php
    require("../config.php");

    $db =  new Database();
    $users = $User->get_users();
    $found = false;

    if(isset($_POST["add_user"])){
   
        $data = [
            "name" => $_POST["name"],
            "email" => $_POST["email"],
            "password" => md5($_POST["password"])
        ];
    
        if(empty($data["name"])|| empty($data["email"]) || empty($data["password"])){
            echo "Všetky polia musia byť vyplnené";
        }else{
            foreach($users as $user){
                if($user->email==$data["email"]){
                    $found =  true;
                }
            }
            if($found==false){
                try{
                    $query = "INSERT INTO users (name, email, password) VALUES (:name, :email,:password)";
                    $query_run = $db->conn->prepare($query);        
                    $query_run->execute($data);
                    header("Location: ../../thankyou.php");
                }catch(PDOException $e){
                    echo $e->getMessage();
                }
            }else{
                echo "Používateľ už existuje";
            }
        }
    }
    else{
        echo "Niekde nastala chyba.";
    }
?>