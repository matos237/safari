<?php
    session_start();
    require("../config.php");
    
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
            $_SESSION["valid"] = True;
            $_SESSION["name"] = $name ;
            header("Location: ../../admin.php");
        }else{
            echo "Nesprávne heslo";
        }
    }

?>