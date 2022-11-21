<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Página Web - Sessão de Usuário</title>
</head>
<body>
<?php   

session_start();
//$_SESSION['nome'] ="ADM";

//elimina todas as variáveis de sessão mas, mantém a sessão atividade
//session_unset();
//elimina toda a sessão
//session_destroy();
//id_sessões
//Bem vindo ,Sr.	<?php echo $_SESSION['nome']; 
 ?>

 <h3>Sessão de Usuário</h3>

SID desta sessão é: <?php  echo session_id(); ?>

</body>
</html>