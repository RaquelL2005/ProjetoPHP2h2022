<?php 
	include("cabecalho.php");
	$idade = 16;
	 if ($idade < 16) {
		include("votacao_menor.php");
	}
	elseif ($idade < 18) {
		include("votacao_16.php");
	}
	else{
		include("votacao_maior.php");
	}
	include("rodape.php")
?>