<?php
session_start();

$login = $_POST["login"];
$senha = $_POST["senha"];

if($login == "admin" and $senha == "1234"){
    $_SESSION["usuario"] = "Administrador";
    header("Location: bemVindo.php");
}
else if($login == "visit" and $senha == "12345"){
    $_SESSION["usuario"] = "Visitante";
    header("Location: bemVindo.php");
}
else if($login == "colab" and $senha == "123456"){
    $_SESSION["usuario"] = "Colaborador";
    header("Location: bemVindo.php");
}
else{
    header("Location: login.php");
}
?>
