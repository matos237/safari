<?php
  $db = new Database();

  $query = $db->conn->query("SELECT * FROM qna");
  $qna = $query->fetchAll(PDO::FETCH_OBJ);

  for($i=0;$i<count($qna);$i++){
        echo'<div class="accordion">';
        $db = new Database();
        $query = $db->conn->query("SELECT * FROM qna");
        $qna = $query->fetchAll(PDO::FETCH_OBJ);
          echo '<div class="question"><p>';
          echo $qna[$i]->question;
          echo '</p></div>';
          echo '<div class="answer"><p>';
          echo $qna[$i]->answer;
          echo '</p></div>';
          echo'</div>';
    }
?>