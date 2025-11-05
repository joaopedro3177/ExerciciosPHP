<?php
	session_start();

	$_SESSION['nome1'] = $_POST['nome1'];
	$_SESSION['idade1'] = $_POST['idade1'];
	$_SESSION['peso1'] = $_POST['peso1'];
	$_SESSION['altura1'] = $_POST['altura1'];




?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tela 02</title>
</head>
<body>


	<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tela 01</title>
</head>
<body>


	<form action="tela3.php" method="post">
		<h2>Insira as informações</h2>

		<label>Nome:</label>
		<input type="text" name="nome2" placeholder="Insira seu nome">

		<label>Idade:</label>
		<input type="number" name="idade2" placeholder="Insira sua idade">

		<label>Peso:</label>
		<input type="number" name="peso2" placeholder="Insira seu peso">

		<label>Altura:</label>
		<input type="number" name="altura2" placeholder="Insira sua altura">

		<input type="submit" value="Próximo">
		


	</form>
</body>
</html>
</body>
</html>