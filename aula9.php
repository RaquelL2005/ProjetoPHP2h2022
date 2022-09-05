<?php 

/*Salario 1,200 inss ir cooperativa grupo a b c a=%15 b=%10 c=5%

salario bruto e liquido, desconto inss, ir, grupo

tabela inss e ir

"Pegar" o salário, colocar na condição das tabelas de INSS e IR, após isso escolher o grupo de A a D.
Mostrar(R$): 
	salário bruto;
	Desconto INSS(Com salário bruto);
	Desconto IR(Com salário bruto);
	Grupo que escolheu e o desconto;
	Salário Liquido;
*/
$salB = 1200;
$salL, $inss, $ir, $gp, $gpD;


//INSS
if ($salB <= 1212) {
	//7%
}else if ($salB <= 2427.35) {
		//9%
	}else if ($salB <= 3641.03) {
			//12%
		} else {
				//14%
			}
//IR
if ($salB <= 1903.98) {
	//Isento
}else if ($salB <= 2826.65) {
		//7,5%
	}else if ($salB <= 3751.05) {
			//15%
		} else if ($salB <= 4664.68) {
				//22,5%
			}else {
					//27,5%
				}

switch ($gp) {
	case 1:
		//15%
		break;
	case 2:
		//10%
		break;
	case 3:
		//5%
		break;
	default:
		//Não escolheu
		break;
}

printf("Seu salário bruto é:".$salB."\nDesconto INSS: ".$inss."\nDesconto Imposto de Renda: ".$ir."\nO grupo escolhido é: ".$gp." e o seu desconto é:".$gpD);

 ?>