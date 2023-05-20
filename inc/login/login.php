<?php
    require("../config.php");
    session_start();
    
    $users = $User->get_users();
    $db =  new Database();
    $data = [
        "email" => $_POST["email"],
        "password" => md5($_POST["password"]),
    ];
    $found = False;
    $name = "";
    if(isset($_POST["log_user"])){
        foreach($users as $user){
            if($data["password"]==$user->password){
                $found = True;
                $name = $user->name;
            }
        }
        if($found==True){
            $_SESSION["valid"] = true;
            $_SESSION["name"] = $name ;
            header("Location: ../../admin.php");
        }else{
            echo "Nesprávne heslo";
        }
    }

?>