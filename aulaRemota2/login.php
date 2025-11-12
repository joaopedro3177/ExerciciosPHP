<?php
session_start();

if(isset($_SESSION['usuario'])){
    echo "Usuário logado: " . $_SESSION['usuario'] . "<br>";
    echo "<a href='sair.php'>Sair</a>";
}
else{
    ?>
    <html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
    </head>
    <body>
        <h2>Login</h2>
        <form method="post" action="valida.php">
            Login: <input type="text" name="login"><br><br>
            Senha: <input type="password" name="senha"><br><br>
            <input type="submit" value="Entrar">
        </form>
    </body>
    </html>
    <?php
}
?>
