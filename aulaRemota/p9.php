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
    <title>Pergunta 9</title>
</head>
<body>
    <h3>9) Qual é o maior oceano do mundo?</h3>
    <form action="p10.php" method="post">
        <input type="radio" name="resp" value="certo"> Oceano Pacífico<br>
        <input type="radio" name="resp" value="errado"> Oceano Atlântico<br>
        <input type="radio" name="resp" value="errado"> Oceano Índico<br><br>
        <input type="submit" value="Próxima">
    </form>
</body>
</html>
