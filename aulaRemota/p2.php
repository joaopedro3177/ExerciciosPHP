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
    <title>Pergunta 2</title>
</head>
<body>
    <h3>2) Quanto é 5 + 3?</h3>
    <form action="p3.php" method="post">
        <input type="radio" name="resp" value="errado"> 9<br>
        <input type="radio" name="resp" value="certo"> 8<br>
        <input type="radio" name="resp" value="errado"> 7<br><br>

        <input type="submit" value="Próxima">
    </form>
</body>
</html>
