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
    <title>Pergunta 8</title>
</head>
<body>
    <h3>8) Qual é o elemento químico representado por “O”?</h3>
    <form action="p9.php" method="post">
        <input type="radio" name="resp" value="certo"> Oxigênio<br>
        <input type="radio" name="resp" value="errado"> Ouro<br>
        <input type="radio" name="resp" value="errado"> Ozônio<br><br>
        <input type="submit" value="Próxima">
    </form>
</body>
</html>
