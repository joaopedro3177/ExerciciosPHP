<?php 

$num1 = 1;
$num2 = 3;
$num3 = 2;
$temp = 0;
$cont = 0;

function Organizar($num1, $num2, $num3, $temp, $cont){
	while ($cont < 3) {
		if($num1 < $num2) {
			$temp = $num2;
			$num2 = $num1;
			$num1 = $temp;
		}
		elseif($num2 < $num3){
			$temp = $num3;
			$num3 = $num2;
			$num2 = $num1;
			$num1 = $temp;


		}
	
		$cont++;

	}
	
	echo("$num1, $num2, $num3");

}
Organizar($num1, $num2, $num3, $temp, $cont);


 ?>