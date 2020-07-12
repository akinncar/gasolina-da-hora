<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Maps</title>
		<link rel="stylesheet" type="text/css" href="styles.css">
		<style>
		  	/* Set the size of the div element that contains the map */
		  	#map {
				height: 720px;  /* The height is 400 pixels */
				width: 100%;  /* The width is the width of the web page */
		   	}
		</style>
		<?php
			include("conexao.php");
			include("index.php");
		?>
		
		
	</head>
	<body>









		<div id="map"></div>
		<script>
			// Initialize and add the map
			function initMap() {
				// centro
				var centro = {lat: -28.481386, lng: -49.006531};
				// The map, centered at Posto
				var map = new google.maps.Map(document.getElementById('map'), {zoom: 12, center: centro})
				


				


				function posiMap(){
					"<?php
						$selectll = 'SELECT lat, lng FROM postos';
						$queryll = mysqli_query($conexao,$selectll) or die ('erro ao consultar');
						while($show = mysqli_fetch_assoc($queryll)) {
					?>";


					var lt = "<?php echo $show['lat'] ?>";
					var lg = "<?php echo $show['lng'] ?>";

					
					
					var myLatlng = new google.maps.LatLng(lt,lg);
					var marker = new google.maps.Marker({
						position: myLatlng,
						map: map,
						
						icon:  "imagem/marker2.png",
						
						label: {
							color: 'white',
							fontWeight: 'bold',
							text: "<?php echo 'preço' ?>",
							
						},
					
					});


					"<?php } ?>";
				}
				posiMap();
			}

		</script>



		<script async defer
			src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDw9QQLuZTS-1Tb360qgbFFWy0qtQ_NXfQ&callback=initMap">
		</script>






	</body>
</html>
