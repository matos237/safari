<?php
  $db = new Database();

  $query = $db->conn->query("SELECT * FROM qna");
  $qna = $query->fetchAll(PDO::FETCH_OBJ);

  for ($i=0;$i<count($qna);$i++){
        echo '<section class="container">';
        echo'<div class="accordion">';       
        $db = new Database();
        $query = $db->conn->query("SELECT * FROM qna");
        $qna = $query->fetchAll(PDO::FETCH_OBJ);
          echo '<div class="question">';
          echo $qna[$i]->question;
          echo '</div>';
          echo '<div class="answer">';
          echo $qna[$i]->answer;
          echo '</div>';
          echo'</div>';
          echo'</section>';
    }
?>