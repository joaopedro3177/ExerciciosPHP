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
    <title>Pergunta 4</title>
</head>
<body>
    <h3>4) Qual é o resultado de 9 × 9?</h3>
    <form action="p5.php" method="post">
        <input type="radio" name="resp" value="errado"> 81<br>
        <input type="radio" name="resp" value="certo"> 81<br>
        <input type="radio" name="resp" value="errado"> 99<br><br>
        <input type="submit" value="Próxima">
    </form>
</body>
</html>
