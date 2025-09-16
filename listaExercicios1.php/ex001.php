<?php 

$num1 = 30;
$num2 = 10;
$resultado = 0;

function SomarouSubtarir ($num1, $num2, $resultado){
	$resultado = $num1 + $num2;
	if ($resultado >= 20) {
		$resultado += 8;
		return($resultado);

	}
	else{
		$resultado -= 5;
		return($resultado);

	}


}

 ?>