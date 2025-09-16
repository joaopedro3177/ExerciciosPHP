<?php 
$nome = "João Pedro";
$idade = 17;
$sexo = "FEMININO";

$sexo = strtolower($sexo); // usei pois estou aprendendo isso em JAVA. O comando eu pesquisei qual era.

function Verificar($nome, $idade, $sexo){
	if($sexo == "feminino" && $idade < 25){
		echo("$nome <br/> ACEITA");

	}
	else{
		echo("$nome <br/> NÃO ACEITA!");
	}

}
Verificar($nome, $idade, $sexo);



 ?>