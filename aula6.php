<?php 

	$ano =2020; //variável local do script
	//implementação de uma função

	function exibir ($parametro){

	$parametro = $parametro + 4;
	return $parametro;

	}

	echo "Estamos em ".$ano." e daqui a 4 ano em".exibir($ano);
?>
<?php 

$ano =2020;//implementação de uma função

function exibirE(){

GLOBAL $ano; //definição da váriável global
$ano++;
return $ano;

}

echo "<br/> Ano".$ano;
echo "<br/> Ano".exibirE();
echo "<br/> Ano".exibirE(); 
echo "<br/> Ano".$ano;
 ?>

 <?php 
  //Staic não perde  o valor declarado //Staic não perde  o valor declarado
function exibirA(){

	STATIC $ano2; // definição variável estática
	$ano2++;
	echo "<br/>".$ano2;

}
echo exibirA();
echo exibirA();
echo exibirA();

  ?>
  <?php 
echo "<br/> Olá Seja Bem vindo".$_SERVER['REMOTE_ADDR']."<br/>";
echo " Você está utilizando o navegador:".$_SERVER['HTTP_USER_AGENT'];

   ?>

   <?php 
define("PI", 3.14);
define("DISC", "Matemática");

echo "<br/> Valor de PI	".PI;
echo "<br/> Disciplina:".DISC;

    ?>