<?php 

$nomes = array("João","Raquell","Vitor");

foreach ($nomes as $item) {

	echo "<br/>".$item;
}
/*Repetição*/
/* do while -> entra pelo menos uma vez e dps verifica se está correto*/
/* for (; ;){}*/
/*array é  uma função pré determinada para usar 
foreach : 1-reconhecer as 2-recebe o valor do 1
goto -> palavra-chave
*/
 ?>

 <?php 
 	for($a=1;$a < 100;$a++){
 		if($a == 10){
 			goto desvio;
 		}
 		echo "<br/>".$a;
 	}

 	desvio: echo "<br> Aqui está o desvio.";

  ?>
  <?php 
for ($x=0; $x<=100; $x++) { 
	if($x % 2==0){
		continue;
	}

		echo "<br/>".$x;
}


   ?>