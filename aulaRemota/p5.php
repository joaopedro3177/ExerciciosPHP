<?php
    session_start();
    if ($_POST['resp'] == "certo") {
        $_SESSION['pontos'] = $_SESSION['pontos'] + 1;
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Pergunta 5</title>
</head>
<body>
    <h3>5) Qual é o menor país do mundo?</h3>
    <form action="p6.php" method="post">
        <input type="radio" name="resp" value="errado"> Mônaco<br>
        <input type="radio" name="resp" value="certo"> Vaticano<br>
        <input type="radio" name="resp" value="errado"> Malta<br><br>
        <input type="submit" value="Próxima">
    </form>
</body>
</html>
