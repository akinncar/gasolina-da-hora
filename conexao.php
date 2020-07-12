<!doctype html>
<html lang="pt-br">
	<head>
		<meta charset="utf -8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<?php
			// UTF 8 para o php
			//header("content-type: text/html;charset=utf-8");

			$servername = "localhost";
			$username = "root";
			$password = "";
			$database = "gasolinadahora";

			$conexao = mysqli_connect($servername,$username,$password,$database);

			if(!$conexao){
				die("Connection failed: " . mysqli_connect_error());
			}


			#while($exibe = mysqli_fetch_assoc($query)) {
			#echo $exibe['cod'].' | ' ;
			#$cod = $exibe['cod'];
			#echo $exibe['nome'].' | ' ;
			#$nome = $exibe['nome'];
			#echo $exibe['endereco'].' | ';
			#$endereco = $exibe['endereco'];
			#echo $exibe['telefone'].' | ';
			#$telefone = $exibe['telefone'];
			#echo $exibe['preco'].' | ';
			#$preco = $exibe['preco']."<br>";
			#}

			// UTF 8 para conexao com banco
			mysqli_query($conexao,"SET NAMES 'utf8'");
			mysqli_query($conexao,"SET character_set_connection=utf8");
			mysqli_query($conexao,"SET character_set_client=utf8");
			mysqli_query($conexao,"SET character_set_results=utf8");


		?>
    <meta charset="utf-8">
	</head>
</html>
