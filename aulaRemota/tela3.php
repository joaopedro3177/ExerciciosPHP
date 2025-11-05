<?php
	session_start();

	$_SESSION['nome2'] = $_POST['nome2'];
	$_SESSION['idade2'] = $_POST['idade2'];
	$_SESSION['peso2'] = $_POST['peso2'];
	$_SESSION['altura2'] = $_POST['altura2'];
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tela 03</title>
</head>
<body>


	<h2>Comparando os Formulários</h2>

	<?php 

		echo("Altura maior:");
		if ($_SESSION['altura1'] > $_SESSION['altura2']) {
			echo($_SESSION['nome1']);
		}

		else{

			echo($_SESSION['nome2']);

		}

		echo("</br>");


		echo("Mais velho:");
		if ($_SESSION['idade1'] > $_SESSION['idade2']) {
			echo($_SESSION['nome1']);
		}

		else{

			echo($_SESSION['nome2']);

		}

		echo("</br>");



		echo("Peso maior:");
		if ($_SESSION['peso1'] > $_SESSION['peso2']) {
			echo($_SESSION['nome1']);
		}

		else{

			echo($_SESSION['nome2']);

		}

		echo("</br>");


	 ?>
</body>
</html>