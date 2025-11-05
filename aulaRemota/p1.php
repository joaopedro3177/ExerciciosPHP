<?php
    session_start();
    $_SESSION['nome'] = $_POST['nome'];
    $_SESSION['pontos'] = 0;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Pergunta 1</title>
</head>
<body>
    <h3>1) Qual é a capital do Brasil?</h3>
    <form action="p2.php" method="post">
        <input type="radio" name="resp" value="errado"> Rio de Janeiro<br>
        <input type="radio" name="resp" value="certo"> Brasília<br>
        <input type="radio" name="resp" value="errado"> São Paulo<br><br>

        <input type="submit" value="Próxima">
    </form>
</body>
</html>
