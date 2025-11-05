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
    <title>Pergunta 6</title>
</head>
<body>
    <h3>6) Quem pintou a Mona Lisa?</h3>
    <form action="p7.php" method="post">
        <input type="radio" name="resp" value="errado"> Michelangelo<br>
        <input type="radio" name="resp" value="certo"> Leonardo da Vinci<br>
        <input type="radio" name="resp" value="errado"> Rafael<br><br>
        <input type="submit" value="Próxima">
    </form>
</body>
</html>
