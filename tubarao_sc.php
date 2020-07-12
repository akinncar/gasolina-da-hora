<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf -8">

    <?php
		include("conexao.php");
		include("index.php");
	 ?>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <title>Postos Sul</title>
	

	
	</head>
	<body>
		
				
		  

		</div>

		
		

		<?php
				$select = "SELECT * FROM postos WHERE cidade='tubarao'";
				$query = mysqli_query($conexao,$select) or die ("erro ao consultar");
				while($exibe = mysqli_fetch_assoc($query)) {

					if($exibe['imagem'] === NULL){
						$photo = 'no_img.png';
					}
					else{
						$photo = $exibe['imagem'];
					}
					
					//info
					$cod = $exibe['cod'];
					$nome = $exibe['nome'];
					$endereco = $exibe['endereco'];
					$telefone = $exibe['telefone'];
					
					//preços
					$gasolina_prazo = $exibe['gasolina_prazo'];
					$gasolina_vista = $exibe['gasolina_vista'];
					$adtivada_prazo = $exibe['adtivada_prazo'];
					$adtivada_vista = $exibe['adtivada_vista'];
					$diesel_prazo = $exibe['diesel_prazo'];
					$diesel_vista = $exibe['diesel_vista'];
					$s10_prazo = $exibe['s10_prazo'];
					$s10_vista = $exibe['s10_vista'];
					$etanol_prazo = $exibe['etanol_prazo'];
					$etanol_vista = $exibe['etanol_vista'];
					$gnv = $exibe['gnv'];
		?>
				
			
			
			<!-- 
			<section class="posto" >
			<div class="d-flex justify-content-center"  >
				<div class="media" style="max-width: 900px; background: #E0EEEE; padding: 2%;" >
					<img  class="mr-3" src='imagem/<?php echo $photo ?>' alt="SEM IMAGEM" style="max-width: 200px; max-height: 200px; height:100%; ">
					<div class="media-body" style="max-width: 300px;">
						
						<h5 class="mt-0"><?php echo $nome ?></h5>	
						<p>Endereço: <?php echo $endereco ?></p>	
						<p>Telefone: <?php echo $telefone ?></p>	
						<p class='preco'> <?php echo $preco ?> </p>	
						<p> Formas de Pagamento: </p>
					</div>
				</div>
			</div>
		</section>
		-->	

		
		<center>
			<section class="posto">
				<div class="d-flex flex-wrap justify-content-center" style="border: 2px solid #3399ff; border-radius: 10px; padding: 1%; max-width: 900px;">
					<img class="" src='imagem/<?php echo $photo ?>' alt="SEM IMAGEM" style="max-width: 200px; max-height: 200px; height:auto; margin-left: 20px; margin-right: 20px;">
					<div class="media-body" style="padding-left: 23%; padding-right: 23%; padding-top: 2%;">
						<h5 class="mt-0"><?php echo $nome ?></h5>	
						 <p>Endereço: <?php echo $endereco ?></p> 	
						<p>Telefone: <?php echo $telefone ?></p>	
						<button id="myBtn" onclick="getModal('<?php echo $nome;?>','<?php echo $endereco;?>','<?php echo $telefone;?>','<?php echo $gasolina_prazo ?>','<?php echo $gasolina_vista;?>','<?php echo $adtivada_prazo;?>','<?php echo $adtivada_vista;?>','<?php echo $diesel_prazo;?>','<?php echo $diesel_vista;?>','<?php echo $s10_prazo;?>','<?php echo $s10_vista;?>','<?php echo $etanol_prazo;?>','<?php echo $etanol_vista;?>','<?php echo $gnv;?>')" data-toggle="modal" data-target="#myModal">
							<?php echo 'Exibir Preços'; ?>		
						</button>	
				
			
						
					</div>
				</div>
			<section>
		<center>
		


		<?php
			}
		?>
	
		
		<script>		
			function getModal(text,text2,text3,text4,text5,text6,text7,text8,text9,text10,text11,text12,text13,text14 ){
				nome = text;
				end = text2;
				tel = text3;
				gasolina_prazo = text4;
				gasolina_vista = text5;
				adtivada_prazo = text6;
				adtivada_vista = text7;
				diesel_prazo = text8;
				diesel_vista = text9;
				s10_prazo = text10;
				s10_vista = text11;
				etanol_prazo = text12;
				etanol_vista = text13;
				gnv = text14;

				document.getElementById("nomeJs").innerHTML = nome;
				document.getElementById("endJs").innerHTML = end;
				document.getElementById("telJs").innerHTML = `Telefone: ${tel}`;
				if (gasolina_prazo != '') {
					document.getElementById("gasolina_prazoJs").innerHTML = 'Gasolina (Prazo): ' + gasolina_prazo;
				}	
				if (gasolina_vista != '') {
					document.getElementById("gasolina_vistaJs").innerHTML = 'Gasolina (Vista): ' + gasolina_vista;
				}	
				if (adtivada_prazo != '') {
					document.getElementById("adtivada_prazoJs").innerHTML = 'Gasolina Aditivada (Prazo): ' + adtivada_prazo;
				}	
				if (adtivada_vista != '') {
					document.getElementById("adtivada_vistaJs").innerHTML = 'Gasolina Aditivada (Vista): ' + adtivada_vista;
				}	
				if (diesel_prazo != '') {
					document.getElementById("diesel_prazoJs").innerHTML = 'Diesel (Prazo): ' + diesel_prazo;
				}	
				if (diesel_vista != '') {
					document.getElementById("diesel_vistaJs").innerHTML = 'Diesel (Vista): ' + diesel_vista;
				}	
				if (s10_prazo != '') {
					document.getElementById("s10_prazoJs").innerHTML = 'S10 (Prazo): ' + s10_prazo;
				}	
				if (s10_vista != '') {
					document.getElementById("s10_vistaJs").innerHTML = 'S10 (Vista): ' + s10_vista;
				}	
				if (etanol_prazo != '') {
					document.getElementById("etanol_prazoJs").innerHTML = 'Etanol (Prazo): ' + etanol_prazo;
				}	
				if (etanol_vista != '') {
					document.getElementById("etanol_vistaJs").innerHTML = 'Etanol (Vista): ' + etanol_vista;
				}	
				if (gnv != '') {
					document.getElementById("gnvJs").innerHTML = 'GNV: ' + gnv;
				}	

			}
		</script>
		
		<!-- Modal -->
			<div class="modal fade" id="myModal" role="dialog">
				<div class="modal-dialog">

					<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title" id='nomeJs' style='font-weight: bold;'></h4>
							<button type="button" class="close" data-dismiss="modal">&times;</button>		  
						</div>

						<div class="modal-body">
							<p id='endJs' style='font-weight: bold;'></p>
							<p id='telJs' style='font-weight: bold;'></p>
							<p id='gasolina_prazoJs'></p>
							<p id="gasolina_vistaJs"></p>
							<p id="adtivada_prazoJs"></p>
							<p id="adtivada_vistaJs"></p>
							<p id="diesel_prazoJs"></p>
							<p id="diesel_vistaJs"></p>
							<p id="s10_prazoJs"></p>
							<p id="s10_vistaJs"></p>
							<p id="etanol_prazoJs"></p>
							<p id="etanol_vistaJs"></p>
							<p id="gnvJs"></p>
						</div>

						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
						</div>
					</div>

				</div>
			</div>		

	</body>
</html>
