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
    <title>Pergunta 7</title>
</head>
<body>
    <h3>7) Em que continente fica o Egito?</h3>
    <form action="p8.php" method="post">
        <input type="radio" name="resp" value="errado"> Europa<br>
        <input type="radio" name="resp" value="certo"> África<br>
        <input type="radio" name="resp" value="errado"> Ásia<br><br>
        <input type="submit" value="Próxima">
    </form>
</body>
</html>
