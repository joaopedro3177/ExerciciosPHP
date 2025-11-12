<?php
session_start();

if(!isset($_SESSION["usuario"])){
    header("Location: login.php");
}
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Bem-vindo</title>
</head>
<body>
    <h2>Seja bem-vindo <?php echo $_SESSION["usuario"]; ?>!</h2>
    <a href="sair.php">Sair</a>
</body>
</html>
