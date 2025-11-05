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
    <title>Pergunta 3</title>
</head>
<body>
    <h3>3) Qual é o maior planeta do sistema solar?</h3>
    <form action="p4.php" method="post">
        <input type="radio" name="resp" value="errado"> Terra<br>
        <input type="radio" name="resp" value="certo"> Júpiter<br>
        <input type="radio" name="resp" value="errado"> Marte<br><br>

        <input type="submit" value="Próxima">
    </form>
</body>
</html>
