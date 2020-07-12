<?php
	session_start();
	include("navbar.php");
	include("conexao.php");
	if ($_SESSION['logged']):
?>

<!doctype html>
<html>
<head>
	<title>Cadastrar Imagem</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="styles.css">



	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">



</head>

<body>
	<div class="menu_edit">
		<center>

			<a href="editar.php" style="color: #3399ff; font-size: 30px;"><< Voltar ao Menu</a><br> <br>


			<form action="upload.php" method="POST" enctype="multipart/form-data" <br>
				
				Posto:
				<select name='nome_att' class="btn btn-outline-primary" style="margin:8px; border-radius: 54px;">
					<?php
						$sessao = $_SESSION['user'];
						$select_nome = "SELECT nome FROM postos WHERE login = '$sessao'";

						if ($_SESSION['user'] === 'admin'){
							$select_nome = "SELECT nome FROM postos";
						}

						$query_nome = mysqli_query($conexao,$select_nome) or die ('erro ao buscar postos');
						while ($att = mysqli_fetch_assoc($query_nome)) {
					?>

					<option value="<?php echo $att['nome'] ?>"><?php echo $att['nome']?></option>

					<?php
						}
					?>

				</select>

				<br>

			
				Imagem: <input id="file" type="file" required name="arquivo"><br>


				<input type="submit" value="Salvar" class="btn btn-outline-primary" style="margin:8px; border-radius: 54px;">
			</form>

		</center>	
		

	</div>

			


	<?php
		else:
			echo "Your not logged in";
		endif;
	?>

</body>
</html>
