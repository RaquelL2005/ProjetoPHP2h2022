<?php 
$num1 = 57;
$num2 = 12;
function somarvalor($num1 , $num2){
 return ($num1 + $num2);

}
echo "A Soma é: ".somarvalor($num1, $num2);

 ?>


 <?php 
 	$valor1 = 100;
 	$valor2 = 29;

 	function multVal($v1, $v2){
 		return($v1 * $v2);
 	}

 	function mostra(){
 		echo "<br>O resultado é: ";
 	}

 	echo mostra(),multVal($valor1, $valor2);

  ?>
  