<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Admin rozhranie </h1>
    <form action="inc/portfolio/insert.php" method="post">
        <input type="text" name="name" id="name" placeholder="Názov portfolia">
        <input type="text" name="image" id="image" placeholder="Cesta k obrázku">
        <input type="submit" value="Pridať portfolio", name="insert_portfolio">
    </form>
</br>
    <h2>Pridávanie QNA</h2>
    <form action="inc/qna/insert_qna.php" method="post">
        <input type="text" name="question" id="question" placeholder="Vlož otázku">
        <input type="text" name="answer" id="answer" placeholder="Vlož odpoveď">
        <input type="submit" value="Pridať do QNA", name="insert_qna">
    </form>
</body>
</html>