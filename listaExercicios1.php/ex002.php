<?php 
$numero = 2;

function informarDivisor($numero){
	if($numero % 2 == 0){
		echo("Numero divisivel por 2");



	}
	elseif($numero % 5 == 0){
		echo("Numero divisivel por 5");
	}

	elseif($numero % 10 == 0){
		echo("Numero divisivel por 10");
	}

	else{
		echo("Numero não é divisive por 2, 5 ou 10");
	}

}

informarDivisor($numero);



 ?>