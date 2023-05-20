<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin rozhranie</title>
</head>
<body>
    <?php

        include("partials/header.php");

    ?>

    <main>
        <h1>Admin rozhranie </h1>
        <h2>Pridávanie do galérie</h2>
            <form action="inc/gallery/insert_gallery.php" method="post">
                <input type="text" name="name" id="name" placeholder="Názov portfolia">
                <input type="text" name="path" id="path" placeholder="Cesta k obrázku">
                <input type="submit" value="Pridať do galérie", name="insert_gallery">
            </form>
        </br>
        <h2>Pridávanie QNA</h2>
            <form action="inc/qna/insert_qna.php" method="post">
                <input type="text" name="question" id="question" placeholder="Vlož otázku">
                <input type="text" name="answer" id="answer" placeholder="Vlož odpoveď">
                <input type="submit" value="Pridať do QNA", name="insert_qna">
            </form>
    </main>
    <?php

        include("partials/footer.php");

    ?>
</body>
</html>