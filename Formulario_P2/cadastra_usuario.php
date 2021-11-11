
<html> 
<head>
<meta charset="UTF8">
<title>Programação para Web - Exemplo de um formulário WEB</title> 
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head> 
<body>


	<style>
		body{
			font-family: monospace;
			border: solid thin;
			width: 1280px;
			height: 820px;
			background-color: white;
			font-weight: 100;

		}

		.titulo{
			background-color: rgb(55, 86, 135);
			border-style: solid;
			border-width: thin;
			height: 40px;
			text-align: center;
			color: white;
			font-family: monospace;
			
		}
		.h1data{
			font-size: 18px;
			margin-top: -20px
		}
		.h1titulo{
			margin-top: 7px;
		}
		.dadosinformados{
			font-size: 18px;
			color: #212519;
			margin: 10px;
			font-weight: 600;
		
		}
		.tabela{
			font-size: 18px;
			font-family: monospace;

		}
		
	</style>

	<div class="titulo">
	
		<h1 class="h1titulo" style="font-size: 18px;">Programação para Web - Cadastro de Usuário </h1>
		<h1 class="h1data" style="text-align: right;"><?=date("d-m-Y H:i:s")?></h1>

	</div>


	<?php
	
	

	$nome = 		$_POST['USR_NOME'];
	$cpf = 			$_POST['USR_CPF'];
	$nascimento = 	$_POST['USR_NASCIMENTO'];
	$sexo = 		$_POST['USR_SEXO'];
	$estadocivil = 	$_POST['USR_ESTADOCIVIL'];
	$renda = 		$_POST['USR_RENDA'];
	$endereco = 	$_POST['USR_ENDERECO'];
	$logradouro = 	$_POST['USR_LOGRADOURO'];
	$numero = 		$_POST['USR_NUMERO'];
	$complemento = 	$_POST['USR_COMPLEMENTO'];
	$estado = 		$_POST['USR_ESTADO'];
	$cidade = 		$_POST['USR_CIDADE'];


		$hostname="localhost";
		$username="root";
		$password="";
		$dbname="formulario";
		$usertable="cadastro";
		/*$yourfield = "nome";*/

			$con = mysqli_connect($hostname, $username, $password, $dbname);

			$query = "INSERT INTO cadastro 	(nome, cpf, nascimento, sexo, estado_civil, renda, endereco, logradouro, numero, complemento, estado, cidade)
						VALUES 				('$nome','$cpf','$nascimento','$sexo','$estadocivil','$renda','$endereco','$logradouro','$numero','$complemento','$estado','$cidade')";
			$insert = mysqli_query($con,$query);
			
			if($insert){
				
			  }else{
				echo"Erro";
		  }

	

			function ValidaCpf($cpf){
				$cpf = preg_replace('/[^0-9]/', '', $cpf);
			
				$D1 = 0;
				$D2 = 0;
			
				for ($i=0, $x = 10; $i < 8; $i++, $x--) { 
					$D1 += $cpf[$i] * $x;
				}
			
				for ($i=0, $x = 11; $i < 9; $i++, $x--) { 
					$D2 += $cpf[$i] * $x;
			
					if(str_repeat($i, 11) == $cpf){
						die('Não repita!');
					}
				}
				$re1 = (($D1%11) < 2) ? 0 : 11-($D1%11);
				$re2 = (($D2%11) < 2) ? 0 : 11-($D2%11); 
			
				if($re1 != $cpf[9] || $re2 != $cpf[10]){
						return false;
				}else {
						return true;
				}
			
			}

		$erro = Array(); // Array com os erros encontrados 
		// Vamos verificar se existe algum campo não informado 
		foreach($_POST as $chv => $vlr) {
			if($vlr=="" AND substr($chv,0,3)=="USR") {
				$erro[] = "O campo " . substr($chv,4) . " Não foi informado";
		}
	}
	if(sizeof($erro)==0) {
	// Tudo Ok, mostramos os dados 
	echo '<p><font color="navy"><b>'; 
	echo '<class="dadosinformados" style="font-size: 18px;color: #212519;margin: 10px;font-weight: 600;">Dados informados no Cadastro:</b></font></p>'; 
	echo '<table class="tabela" border=0 cellpadding=5 cellspacing=5>'; 
	foreach($_POST as $chv => $vlr) {
		if(substr($chv,0,3)=="USR") { 
			echo "<tr><td>" . ucfirst(strtolower(substr($chv,4))) .
				 "</td> "; 
		    echo "<td><br><b>" . $vlr . "</b></td></tr>";
		}
	}

	foreach($_POST as $chv => $vlr) {
		if(substr($chv,0,7)=="USR_CPF") { 
			if(strlen($cpf) < 11 AND strlen($cpf) > 11  ){
				die('Digite todo o CPF!');
			}
			else if (ValidaCpf($cpf) == true){

		    echo 'CPF VALIDO!';
			}else if (ValidaCpf($cpf) == false) {
				echo '<div id="cpf" style="font-weight: 900;color: red;margin: 10px;" >CPF FALSO, OU JÁ EM USO!';

			$con = mysqli_connect($hostname, $username, $password, $dbname);

			$query = "UPDATE cadastro SET cpf ='000 000 000 00' where nome = '$nome'";

			$update = mysqli_query($con,$query);
			}
		}
	}
	
	echo '<tr><td height=40 valign="bottom"><br><b>Obrigado!</td></tr>'; 
  echo '</table>'; 
 }
	else { 
	// Mensagem de erro 
	echo '<p align="center"><font color="red"><b>';
	foreach($erro as $vlr){
		echo "<br>$vlr";
						
    } 
	echo '</b></font>';
}

	
?>
	<div id="voltar" style="margin-top: 10px;
    margin-left: 15px;">
		<a href="testeform.php">Voltar</a>
	</div>
</body> 
</html>


