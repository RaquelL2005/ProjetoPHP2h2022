<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Aula 05</title>
</head>
<body>
<?php 
	$nome = "Armando"; //variável local no script
	//implementação de uma função

	function exibir (){
		$nome = "Raquell"; //variável local na função

		echo "Valor da varável dentro da função ".$nome;

	}
	 exibir();// chamar a função
	 echo "<br/> Valor da variável fora da função ".$nome;

 ?>
</body>
</html>
<?php  ?>

<!--escopo de variáveis = como  a gente enxerga dentro do sistema as variáveis dentro de uma classe-->
<!-- concatenar -->
