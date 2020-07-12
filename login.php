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
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <title>Postos Sul</title>
	</head>
	<body>

		<script>
			function senhaErrada(){
				alert('Login ou Senha Incorreto');
			} 	
		</script>
	 	
	 	<?php 
			include("conexao.php");
			$select = 'SELECT login, senha FROM postos';
			$query = mysqli_query($conexao, $select);
			if (!isset($_SESSION['logged'])):	
				unset($_SESSION['logged']);
				
		?>
		
		<center>
			<div class="d-flex justify-content-center" style="margin:11%;">
				<form action='login.php' method="GET">
				  <h4 style='font-family: arial;'> Digite o usuário e a senha fornecidos pelo administrador: <h4/>
				  <input type="text" name="usuario" class="btn btn-outline-primary" style="margin:8px; border-radius: 54px;" placeholder="Usuário" > <br>
				  <input type="password" name="senha" class="btn btn-outline-primary" style="margin:8px; border-radius: 54px;" placeholder="Senha"> <br>
				  <input type="submit" name="login" value="Login" class="btn btn-outline-primary" style="margin:8px; padding-left:40px; padding-right:40px; border-radius: 54px;"><br>
				</form> 
			</div>
		</center>
      

		<?php
			else:
				echo '<meta HTTP-EQUIV="Refresh" CONTENT="0; URL=editar.php">';
				//header('location: editar.php');
			endif;	

			if (isset($_GET['usuario']) && isset($_GET['senha'])){
				$u = $_GET['usuario'];
				$s = $_GET['senha'];

				if ($u == "akinn" && $s == "akinn"){
					$_SESSION['logged'] = true;
					$_SESSION['user'] = 'admin';
					echo '<meta HTTP-EQUIV="Refresh" CONTENT="0; URL=editar.php">';
					die;
				}

				while($exibe = mysqli_fetch_assoc($query)) {
					$checkuser = $exibe['login'];
					$checksenha = $exibe['senha'];
					if ($u == $checkuser && $s == $checksenha){
						$_SESSION['logged'] = true;
						$_SESSION['user'] = $u;
						echo '<meta HTTP-EQUIV="Refresh" CONTENT="0; URL=editar.php">';
						die;
					}
				}
	
				echo '<script> senhaErrada() </script>';
				echo '<meta HTTP-EQUIV="Refresh" CONTENT="0; URL=login.php">';
			
			}

		?>

		
	</body>
</html>

