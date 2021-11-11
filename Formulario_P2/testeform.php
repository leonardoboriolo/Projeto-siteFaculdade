<html> 
<head>
<title> Programação para Web - Exemplo de um formulário WEB </title> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF8">
</head> 
<?php 
function lista_estados() {
	$ufs = array("AM" => "Amazonas",
				 "BA" => "Bahia", 
				 "CE" => "Ceará", 
				 "ES" => "Espírito Santo",
				 "MT" => "Mato Grosso",
				 "MG" => "Minas Gerais",
				 "PB" => "Paraíba",
				 "PR" => "Paraná",
				 "RJ" => "Rio de Janeiro",
				 "RS" => "Rio Grande do Sul",
				 "SP" => "São Paulo"); 			 
				 
		

	$ret = "<SELECT NAME='USR_ESTADO' STYLE=' 	width: 54.05%;
    			height: 41px; margin-left:0px;' ID='container-estado'";  
	$ret.= ">\n"; 
	foreach($ufs as $chv => $vlr) {
		$ret.=	"<OPTION VALUE='$chv'>$vlr</OPTION>\n";
	}
	$ret.= "</SELECT>\n"; 
	return $ret;
}
?>

<body>

	<style>
		body{
			font-family: monospace;
			font-size: 15px;
			font-weight: 500;
			text-shadow: 1 1 1 black;
			width: 1280px;
			height: 768px;
		}


		#container-full-page{
			width: 80%;
			height: 80%;
			margin-left: 100px;
			border-style: solid;
			border-width: thin;
			border-radius: 2px;



		}

		#titulo{
			background-color: rgb(55, 86, 135);
			border-style: solid;
			border-width: thin;
			height: 40px;
			text-align: center;
			
		}
		.nometitulo{
			color: white;
			font-weight: 100;
			text-shadow: 1px 1px 1px 10px; 
			font-size: 18px;
			margin-top: 6px;
			font-family: monospace;
		

		}
		#container-nome{
			margin-top: 16px;

		}
		.label-nome{
			margin: 10px;
		}
		.input-nome{
			   	height: 41px;
    			width: -webkit-fill-available;
			    margin: 10px;
			    margin-top: 5px;
		}
		#container-cpf{


		}
		.label-cpf{
			margin: 10px;
		}
		.input-cpf{
				height: 41px;
    			width: 245px;
			    margin: 10px;
			    margin-top: 5px;
		}
		#container-nascimento{
			margin-top: -74px;
    		margin-left: 342px;
		}
		.label-nascimento{
			margin: 10px;
		}
		.input-nascimento{
				height: 41px;
    			width: 245px;
			    margin: 10px;
			    margin-top: 5px;

		}
		#container-sexo{
			margin-top: -74px;
			margin-left: 690px;
		
		}
		.label-sexo{

			margin: 10px;
		}
		.input-sexo{
			    margin: 10px;
			    margin-top: 12px;
			    margin-left: -webkit-fill-available;
		}

		.label_estadocivil{
				margin: 10px;
				margin-top: 12px;
		}
		#select_estadocivil{
				margin: 10px;
			 	margin-top: 10px;
			 	width: 53%;
    			height: 41px;
		}
		#container-estado_civil{
			margin-top: 5px;

		}

		.label-renda{
			margin: 10px;
		}
		.input-renda{
			margin: 10px;
			height: 41px;
			width: 449px;


		}
		#container-renda{
			margin-left: 555px;
   			margin-top: -79px;
		}
		.label-endereco{
			margin: 10px;

		}
		.input-endereco{
			margin: 10px;
			height: 41px;
			width: -webkit-fill-available;

		}
		#container-endereco{

		}

		#container-logradouro{
			margin-top: -74px;
		}
		.label-logradouro{
			margin: 10px;
		}
		.input-logradouro{
				height: 41px;
    			width: 53%;
			    margin: 10px;
			    margin-top: 5px;
		}


		#container-numero{
			margin-top: -74px;
    		margin-left: 553px;

		}
		.label-numero{
			margin: 10px;
		}
		.input-numero{
			height: 41px;
			width: 217px;
			margin: 10px;
			margin-top: 5px;
			margin-left: 12px;

		}
			#container-complemento{
			margin-top: -74px;
    		
			margin-left: 783px;

		}
		.label-complemento{
				margin: 10px;
		}
		.input-complemento{
				height: 41px;
    			width: 220px;
			    margin: 10px;
			    margin-top: 5px;

		}

		#container-estado{
				margin: 10px;
			 	margin-top: 10px;
			
		}
		.label-estado{
		}

		#container-cidade{
   			margin-top: -89px;
			margin-left: 555px;

		}
		.label-cidade{
			margin: 10px;
		}
		.input-cidade{
				margin: 10px;
				height: 41px;
				width: 448px;
		}
		.input-cadastrar{
			margin: 10px;
			height: 41px;
			width: 150px;
			margin-left: 355px;
		}
		.input-reset{
			margin: 10px;
			height: 41px;
			width: 150px;
			margin-left: 515px;
			margin-top: -51px;
		}
		.container{
			border: 2px solid transparent;
    		background-color: rgb(222 224 226);
    		margin-top: 20px;
		}




	</style>

	<div id="container-full-page">
	<form name="usr" method="post" action="cadastra_usuario.php"> 
		<div id="titulo">  
		<h1 class="nometitulo" style="font-size: 18px">Programação para Web - Cadastro de Usuário </h1> 
		</div>
	
		<div id="container-nome">
			<label class="label-nome">Nome</label>
			<br>
			<input class="input-nome" type="text" name="USR_NOME" size="100%" placeholder="Nome Completo">
		</div>

		<div id="container-cpfnascimentosexo">
			<div id="container-cpf">
				<label class="label-cpf">CPF</label>
				<br>
				<input class="input-cpf" type="text" name="USR_CPF" size="100%" placeholder="000.000.000-00">
				

			</div>
				<div id="container-nascimento">
					<label class="label-nascimento">Data de Nascimento</label>
					<br>
					<input class="input-nascimento" type="date" name="USR_NASCIMENTO" size="100%">
				</div>
					<div id="container-sexo">
						<label class="label-sexo">Sexo</label>
						<br>
						<input class="input-sexo" type="radio" name="USR_SEXO" value="Masculino" checked="">Masculino
						<input class="input-sexo" type="radio" name="USR_SEXO" value="Feminino">Feminino
					</div>
		</div>

	<div id="container-estado_civil">
		<br>
	<label class="label_estadocivil">Estado Civil </label>
	<br>
	<select name="USR_ESTADOCIVIL" id="select_estadocivil">
		<option>Solteiro(a)
		<option>Casado(a)
		<option>Divorciado(a)
		<option>Viúvo(a)
	</select> 
	</div>

		<div id="container-renda">
			<label class="label-renda">Renda Mensal</label>
						<input class="input-renda" type="number" name="USR_RENDA" placeholder="R$ 0,00">
		</div>


		<div id="container-endereco">
		<label class="label-endereco">Endereço</label>
		<input class="input-endereco" type="text" name="USR_ENDERECO" size="30"> 
		</div>

		
		<div id="container-logradouronumerocomplemento">
			<div id="container-lograudoro">
					<label class="label-logradouro">Logradouro</label>
					<br>
					<input class="input-logradouro" type="text" name="USR_LOGRADOURO" size="100%" placeholder="Logradouro">
			</div>
				<div id="container-numero">
						<label class="label-numero">Numero</label>
						<br>
						<input class="input-numero" type="text" name="USR_NUMERO" size="100%" placeholder="Nº">
				</div>
						<div id="container-complemento">
							<label class="label-complemento">Complemento</label>
							<br>
							<input class="input-complemento" type="text" name="USR_COMPLEMENTO" placeholder="Complemento">
						</div>
		</div>
		
		<div id="container-estado">
			<label class="label-estado">Estado</label>
			<br>
			
			<?=lista_estados();?>
			
		</div>


			<div id="container-cidade">
				<label class="label-cidade">Cidade</label>
				<br>
				<input class="input-cidade" type="text" name="USR_CIDADE" size="30" placeholder="Cidade"> 
			</div>

			<div class="container">
			<input class="input-cadastrar" type="submit" value="Cadastrar">

			<input class="input-reset" type="reset" value= "    Limpar    ">
			</div>


			

	</div>
</form> 
</body> 
</html>