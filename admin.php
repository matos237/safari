<?php
    require('inc/config.php');
    session_start();
    if(!isset($_SESSION['name'])){
        header("Location:no-permission.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <?php

        include("partials/header.php");

    ?>
    <main>
    <section>
        <p>Vítaj admin <?php echo($_SESSION['name']);?></p><br>
        <a href="inc/login/logout.php">Odhlásiť sa</a>
    </section>
    <section>
        <h2>Galéria</h2>
        <form action="inc/gallery/insert_gallery.php" method="post">
            <input type="text" name="name" id="name" placeholder="Názov portfólia">
            <input type="text" name="image" id="image" placeholder="Cesta k obrázku">
            <input type="submit" value="Pridať" name="insert_gallery">
        </form>
        <?php
            $Galeria = $Galeria->get_galeria();
            echo '<table class="admin-table">';
                foreach($Galeria as $g){
                    echo '<tr>';
                    echo '<td>'.$g->name;'</td>';
                    echo '<td>'.'<img width="150" src = "'.$g->path.'">';
                    echo '<td><button class="edit">Editovať</button>';
                    echo '<td>
                            <form action="inc/gallery/delete_gallery.php" method="post">
                                <button type = "submit" name="delete_gallery" value="'.$g->id_gallery.'"'.'>Vymazať</button>
                            </form>';
                    echo '</tr>';
                    echo '<tr>';
                    echo '<td colspan="4">
                            <form action="inc/gallery/update_gallery.php" method="post">
                                <input type="hidden" name="form_id" value="'.$g->id_gallery.'"'.'>
                                <input type ="text" name="update_name" placeholder="Názov obrázka"><br>
                                <input type ="text" name="update_path" placeholder = "Cesta k obrázku"><br>
                                <input type ="submit" name="update_gallery" value="Upraviť">
                            </form>
                        </td>'; 
                    echo '</tr>';
                }
                echo '</table>';
        ?>
    </section>
    <section>
        <h2>Qna</h2>
        <form action="inc/qna/insert_qna.php" method="post">
            <input type="text" name="question" placeholder="Názov otázky">
            <input type="text" name="answer"placeholder="Názov odpovede">
            <input type="submit" value="Pridať" name="insert_qna">
        </form>
        <?php
            $qna = $Qna->get_qna();
            
            echo '<table class="admin-table">';
                foreach($qna as $q){
                    echo '<tr>';
                    echo '<td>'.$q->question;'</td>';
                    echo '<td>'.$q->answer;'</td>';
                    echo '<td>
                            <form action="inc/qna/delete_qna.php" method="post">
                                <button type = "submit" name="delete_qna" value="'.$q->id_qna.'"'.'>Vymazať</button>
                            </form>';
                    echo '</tr>';
                    echo '<tr>';
                    echo '<td colspan="4">
                            <form action="inc/qna/update_qna.php" method="post">
                                <input type="hidden" name="form_id" value="'.$q->id_qna.'"'.'>
                                <input type ="text" name="update_question" placeholder="Otázka"><br>
                                <input type ="text" name="update_answer" placeholder = "Odpoveď"><br>
                                <input type ="submit" name="update_qna" value="Upraviť">
                            </form>
                        </td>'; 
                    echo '</tr>';
                }
                echo '</table>';
        ?>
    </section>
    <section>
        <h2>Kontakty</h2>
        <?php
            $contact = $Contact->get_contact();
            echo '<table class="admin-table">';
                foreach($contact as $c){
                    echo '<tr>';
                    echo '<td>'.$c->name;'</td>';
                    echo '<td>'.$c->surname;'</td>';
                    echo '<td>'.$c->mail;'</td>';
                    echo '<td>'.$c->phone;'</td>';
                    echo '<td>'.$c->message;'</td>';
                    echo '<td>
                            <form action="inc/contact/delete_contact.php" method="post">
                                <button type = "submit" name="delete_contact" value="'.$c->id_contact.'"'.'>Vymazať</button>
                            </form></td>';
                    echo '</tr>';
                }
                echo '</table>';
        ?>
    </section>
    </main>

    <?php

        include("partials/footer.php");

    ?>
</body>
</html>