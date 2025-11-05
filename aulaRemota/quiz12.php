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
    <title>Resultado Final</title>
</head>
<body>
    <h2>Resultado Final</h2>

    <?php
    echo "<p>Participante: " . $_SESSION['nome'] . "</p>";
    echo "<p>Acertos: " . $_SESSION['pontos'] . " de 10</p>";
    ?>

    <form action="Cadastro.php" method="post">
        <?php session_destroy(); ?>
        <input type="submit" value="Reiniciar Quiz">
    </form>
</body>
</html>
