<html>
	<a href="editar.php">MENU EDITAR</a>
	<br>
</html>





<?php
	include("conexao.php");
	$nome_upload = $_POST['nome_att'];
	$imagem = $_FILES['arquivo']['name'];
	echo "O nome do arquivo de imagem é:  ".$imagem."<br>";

	move_uploaded_file($_FILES['arquivo']['tmp_name'],"imagem/".$imagem);

	$sql_upload = "UPDATE postos SET imagem='$imagem' where nome='$nome_upload'";


	if(mysqli_query($conexao,$sql_upload)){
          echo " A Imagem foi adcionada ";
        }
        else{
          echo "Erro ao trocar a imagem" ;
        }

?>
