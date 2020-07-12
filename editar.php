<?php
	session_start();
	include("conexao.php");
	include("navbar.php");
	if (isset($_SESSION['logged'])):
?>

<!doctype html>
<html lang="pt">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" type="text/css" href="styles.css">
		
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
		<title>Postos Sul</title>
	</head>
	
	
	<body>
		
		<div class="menu_edit">
			<center>

				<h3 style="color: #3399ff;"> MENU DE EDIÇÃO	</h3> <br />		

				<a href="editar_preco.php" class="btn btn-outline-primary" style="margin:8px; border-radius: 54px;"> Editar preços do posto </a><br> 	
				<a href="upload_imagem.php" class="btn btn-outline-primary" style="margin:8px; border-radius: 54px;"> Trocar foto do posto </a><br> 	
				
				<?php 
					if ($_SESSION['user'] === 'admin'){
						echo '<a href="cadastrar_posto.php" class="btn btn-outline-primary" style="margin:8px; border-radius: 54px;">Adicionar Posto</a><br>';
					}
				 ?>

				<a href="logoff.php" class="btn btn-outline-primary" style="margin:8px; border-radius: 54px;"> Sair</a>
			</center>	
		</div>
		

			

		
		<?php	
			else:
				echo '<meta HTTP-EQUIV="Refresh" CONTENT="0; URL=login.php">';
			endif;
		?>
	
	</body>

</html>
