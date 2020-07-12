<?php
	session_start();
	include("navbar.php");
?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastrar Imagem</title> 
	<?php 
		include("conexao.php");
		if ($_SESSION['logged'] && $_SESSION['user'] === 'admin'):
	?>
</head>

<body>
	<a href="editar.php">MENU EDITAR</a>
	<form action="insert.php" method="POST">
		Nome do Posto: <input type='text' name="nome"><br>
		Endereço: <input type="text" name="edereco"><br>
		Telefone: <input type="text" name="telefone"><br>
		Latitude:  <input type="text" name="lat"><br>
		Longitude:  <input type="text" name="lng"><br>
		Cidade:  <input type="text" name="cidade"><br>
		Estado:  <input type="text" name="estado"><br>
		<input type="submit" value"Cadastrar">
	</form>
	
	<?php 
		else:
			echo "Your not logged in";
		endif;
	?>
	
</body>
</html>
