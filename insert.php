<?php
	include("conexao.php");
	$insert_nome = $_POST['nome'];
	$insert_edereco = $_POST['edereco'];
	$insert_telefone = $_POST['telefone'];
	$insert_lat = $_POST['lat'];
	$insert_lng = $_POST['lng'];
	$insert_cidade = $_POST['cidade'];
	$insert_estado = $_POST['estado'];

	echo $insert_nome;"<br>";
	echo $insert_edereco;"<br>";
	echo $insert_telefone;"<br>";
	echo $insert_lat;"<br>";
	echo $insert_lng;"<br>";
	echo $insert_cidade;"<br>";
	echo $insert_estado;"<br>";


	$sql_insert = "INSERT INTO postos (nome,cidade,estado,endereco,telefone,imagem,lat,lng) 
					VALUES ('$insert_nome','$insert_cidade','$insert_estado','$insert_edereco','$insert_telefone',NULL,'$insert_lat','$insert_lng')";


	if(mysqli_query($conexao,$sql_insert)){
          echo " O Posto foi adcionada ";
        }
        else{
          echo "erro add novo posto" ;
        }

?>