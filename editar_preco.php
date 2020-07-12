<?php
	session_start();
	include("navbar.php");
?>

<!doctype html>
<html lang="pt">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" type="text/css" href="styles.css">
		<?php
			include("conexao.php");
			if ($_SESSION['logged']):
		?>


	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

	<title>Postos Sul</title>
	</head>
	<body>
		
		<div class="menu_edit">
			
			<center>	

				<a href="editar.php" style="color: #3399ff; font-size: 30px;"><< Voltar ao Menu</a><br> <br>
				<form method="_GET">

					Posto
					<select name='nome_att' class="btn btn-outline-primary" style="margin:8px; border-radius: 54px;">
						<?php
							$sessao = $_SESSION['user'];
							$select_nome = "SELECT nome FROM postos WHERE login = '$sessao'";
							
							if ($_SESSION['user'] === 'admin'){
								$select_nome = "SELECT nome FROM postos";
							}

							$query_nome = mysqli_query($conexao,$select_nome) or die ('erro ao buscar posto');
							while ($att = mysqli_fetch_assoc($query_nome)) {
						?>
						<option value="<?php echo $att['nome'] ?>"><?php echo $att['nome']?></option>
						<?php
							}
						?>
					</select>
					<br>
					Gasolina Prazo: <input type="text" name="gasolina_prazo_get" class="btn btn-outline-primary" style="margin:8px; border-radius: 54px;"><br>
					Gasolina Vista: <input type="text" name="gasolina_vista_get" class="btn btn-outline-primary" style="margin:8px; border-radius: 54px;"><br>
					Adtivada Prazo: <input type="text" name="adtivada_prazo_get" class="btn btn-outline-primary" style="margin:8px; border-radius: 54px;"><br>
					Adtivada Vista: <input type="text" name="adtivada_vista_get" class="btn btn-outline-primary" style="margin:8px; border-radius: 54px;"><br>
					Diesel Prazo: <input type="text" name="diesel_prazo_get" class="btn btn-outline-primary" style="margin:8px; border-radius: 54px;"><br>
					Diesel Vista: <input type="text" name="diesel_vista_get" class="btn btn-outline-primary" style="margin:8px; border-radius: 54px;"><br>
					S10 Prazo: <input type="text" name="s10_prazo_get" class="btn btn-outline-primary" style="margin:8px; border-radius: 54px;"><br>
					S10 Vista: <input type="text" name="s10_vista_get" class="btn btn-outline-primary" style="margin:8px; border-radius: 54px;"><br>
					Etanol Prazo: <input type="text" name="etanol_prazo_get" class="btn btn-outline-primary" style="margin:8px; border-radius: 54px;"><br>
					Etanol Vista: <input type="text" name="etanol_vista_get" class="btn btn-outline-primary" style="margin:8px; border-radius: 54px;"><br>
					GNV: <input type="text" name="gnv_get" class="btn btn-outline-primary" style="margin:8px; border-radius: 54px;"><br>
		

					<input type="submit" name="Atualizar" class="btn btn-outline-primary" style="margin:8px; border-radius: 54px;" value="Atualizar"><br>
				</form>

			</center>	

		</div>
			
			
		<?php

			if(isset($_GET["gasolina_prazo_get"])){
				$posto_update = $_GET["gasolina_prazo_get"];
				$nome_update = $_GET["nome_att"];
				$update = "UPDATE postos SET gasolina_prazo='$posto_update' WHERE nome='$nome_update'";

				if(mysqli_query($conexao,$update)){
					echo  "<center> O dado foi atualizado (Gasolina Prazo) </center>";
				}
				else{
					echo "Erro ao atualizar o preço da Gasolina Prazo ,verifique se os campos não estão vazios.";
				}
			}

			if(isset($_GET["gasolina_vista_get"])){
				$posto_update = $_GET["gasolina_vista_get"];
				$nome_update = $_GET["nome_att"];
				$update = "UPDATE postos SET gasolina_vista='$posto_update' WHERE nome='$nome_update'";

				if(mysqli_query($conexao,$update)){
					echo  "<center> O dado foi atualizado (Gasolina Vista) </center>";
				}
				else{
					echo "Erro ao atualizar o preço da Gasolina Vista ,verifique se os campos não estão vazios.";
				}
			}

			if(isset($_GET["adtivada_prazo_get"])){
				$posto_update = $_GET["adtivada_prazo_get"];
				$nome_update = $_GET["nome_att"];
				$update = "UPDATE postos SET adtivada_prazo='$posto_update' WHERE nome='$nome_update'";

				if(mysqli_query($conexao,$update)){
					echo  "<center> O dado foi atualizado (Adtivada Prazo) </center>";
				}
				else{
					echo "Erro ao atualizar o preço da Adtivada Prazo ,verifique se os campos não estão vazios.";

				}
			}

			if(isset($_GET["adtivada_vista_get"])){
				$posto_update = $_GET["adtivada_vista_get"];
				$nome_update = $_GET["nome_att"];
				$update = "UPDATE postos SET adtivada_vista='$posto_update' WHERE nome='$nome_update'";

				if(mysqli_query($conexao,$update)){
					echo  "<center> O dado foi atualizado (Adtivada Vista) </center>";
				}
				else{
					echo "Erro ao atualizar o preço da Adtivada Vista ,verifique se os campos não estão vazios.";

				}
			}

			if(isset($_GET["diesel_prazo_get"])){
				$posto_update = $_GET["diesel_prazo_get"];
				$nome_update = $_GET["nome_att"];
				$update = "UPDATE postos SET diesel_prazo='$posto_update' WHERE nome='$nome_update'";

				if(mysqli_query($conexao,$update)){
					echo  "<center> O dado foi atualizado (Diesel Prazo) </center>";
				}
				else{
					echo "Erro ao atualizar o preço da Diesel Prazo ,verifique se os campos não estão vazios.";

				}
			}

			if(isset($_GET["diesel_vista_get"])){
				$posto_update = $_GET["diesel_vista_get"];
				$nome_update = $_GET["nome_att"];
				$update = "UPDATE postos SET diesel_vista='$posto_update' WHERE nome='$nome_update'";

				if(mysqli_query($conexao,$update)){
					echo  "<center> O dado foi atualizado (Diesel Vista) </center>";
				}
				else{
					echo "Erro ao atualizar o preço da Diesel Vista ,verifique se os campos não estão vazios.";

				}
			}

			if(isset($_GET["s10_prazo_get"])){
				$posto_update = $_GET["s10_prazo_get"];
				$nome_update = $_GET["nome_att"];
				$update = "UPDATE postos SET s10_prazo='$posto_update' WHERE nome='$nome_update'";

				if(mysqli_query($conexao,$update)){
					echo  "<center> O dado foi atualizado (S10 Prazo) </center>";
				}
				else{
					echo "Erro ao atualizar o preço da S10 Prazo ,verifique se os campos não estão vazios.";

				}
			}

			if(isset($_GET["s10_vista_get"])){
				$posto_update = $_GET["s10_vista_get"];
				$nome_update = $_GET["nome_att"];
				$update = "UPDATE postos SET s10_vista='$posto_update' WHERE nome='$nome_update'";

				if(mysqli_query($conexao,$update)){
					echo  "<center> O dado foi atualizado (S10 Vista) </center>";
				}
				else{
					echo "Erro ao atualizar o preço da S10 Vista ,verifique se os campos não estão vazios.";

				}
			}

			if(isset($_GET["etanol_prazo_get"])){
				$posto_update = $_GET["etanol_prazo_get"];
				$nome_update = $_GET["nome_att"];
				$update = "UPDATE postos SET etanol_prazo='$posto_update' WHERE nome='$nome_update'";

				if(mysqli_query($conexao,$update)){
					echo  "<center> O dado foi atualizado (Etanol Prazo) </center>";
				}
				else{
					echo "Erro ao atualizar o preço da Etanol Prazo ,verifique se os campos não estão vazios.";

				}
			}

			if(isset($_GET["etanol_vista_get"])){
				$posto_update = $_GET["etanol_vista_get"];
				$nome_update = $_GET["nome_att"];
				$update = "UPDATE postos SET etanol_vista='$posto_update' WHERE nome='$nome_update'";

				if(mysqli_query($conexao,$update)){
					echo  "<center> O dado foi atualizado (Etanol Vista) </center>";
				}
				else{
					echo "Erro ao atualizar o preço da Etanol Vista ,verifique se os campos não estão vazios.";

				}
			}

			if(isset($_GET["gnv_get"])){
				$posto_update = $_GET["gnv_get"];
				$nome_update = $_GET["nome_att"];
				$update = "UPDATE postos SET gnv='$posto_update' WHERE nome='$nome_update'";

				if(mysqli_query($conexao,$update)){
					echo  "<center> O dado foi atualizado (GNV) </center>";
				}
				else{
					echo "Erro ao atualizar o preço da GNV ,verifique se os campos não estão vazios.";

				}
			}

		?>
		<?php
			else:
				echo "<center> Você não está logado em uma sessão. </center>";
			endif;
		?>


  </body>
</html>
