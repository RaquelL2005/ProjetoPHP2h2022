<?php 

$operador= 1;
$num1= 10;
$num2 = 20;

switch ($operador) {
	case 1:
		
		$result= somaValor($num1,$num2);
		$operacao ="Soma";
		break;
	case 2:
		
		$result= subValor($num1,$num2);
		$operacao ="Subtração";
		break;
	case 3:
		
		$result= multValor($num1,$num2);
		$operacao ="Multiplicação";
		break;
	case 4:
		
		$result= diviValor($num1,$num2);
		$operacao ="Divisão";
		break;
	default:
		echo "Saindo";
		break;
}
function somaValor($num1,$num2){

return($num1+$num2);
}
function subValor($num1,$num2){

return($num1-$num2);
}
function multValor($num1,$num2){

return($num1*$num2);
}
function diviValor($num1,$num2){

return($num1/$num2);
}
echo "o resultado da ".$operacao." é " .$result;

 ?>