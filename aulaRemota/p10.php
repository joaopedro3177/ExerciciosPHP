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
    <title>Pergunta 10</title>
</head>
<body>
    <h3>10) Quem foi o primeiro homem a pisar na Lua?</h3>
    <form action="quiz12.php" method="post">
        <input type="radio" name="resp" value="errado"> Yuri Gagarin<br>
        <input type="radio" name="resp" value="certo"> Neil Armstrong<br>
        <input type="radio" name="resp" value="errado"> Buzz Aldrin<br><br>
        <input type="submit" value="Ver Resultado">
    </form>
</body>
</html>
