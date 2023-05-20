<?php
    require("../Database.php");
    $db = new Database();
    if(isset($_POST["insert_qna"])){

        $data = [
            "question"=>$_POST["question"],
            "answer"=>$_POST["answer"], 
        ];

        $query = "INSERT INTO qna (question,answer) VALUES (:question,:answer)";
        $query_run = $db->conn->prepare($query);
        $query_run->execute($data);
    }else{
        echo "Niekde nastala chyba";
    }
?>