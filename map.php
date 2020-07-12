<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Mapa</title>
		<link rel="stylesheet" type="text/css" href="styles.css">
		<?php
			include("conexao.php");
			include("index.php");
		?>
		
        <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
        <style type='text/css'>body{margin:0;padding:0;overflow:hidden;font-family:'Segoe UI',Helvetica,Arial,Sans-Serif}</style>
		
		
		
	</head>

	<body>

        <div id='printoutPanel'></div>
        
        <div id='myMap' style='height: 400px; width: 100%; '></div>
        <script type='text/javascript'>
            function loadMapScenario() {		
				
					
                var map = new Microsoft.Maps.Map(document.getElementById('myMap'), {
                    center: new Microsoft.Maps.Location(-28.481386, -49.006531), 
				    mapTypeId: Microsoft.Maps.MapTypeId.birdseye,					
                    zoom: 11 });
				
				
				// marker
				
				function loadMarkers(){
					"<?php
						$selectll = 'SELECT lat, lng, nome FROM postos';
						$queryll = mysqli_query($conexao,$selectll) or die ('erro ao consultar');
						while($show = mysqli_fetch_assoc($queryll)) {
					?>";
					
					var lt = "<?php echo $show['lat'] ?>";
					var lg = "<?php echo $show['lng'] ?>";
					var nome = "<?php echo $show['nome'] ?>";
					
					var pushpin = new Microsoft.Maps.Pushpin(new Microsoft.Maps.Location(lt,lg), { title: nome });
					var polyline = new Microsoft.Maps.Polyline([new Microsoft.Maps.Location(lt, lg),
						new Microsoft.Maps.Location(lg, lt)], { strokeColor: 'lightblue', strokeThickness: 0 });
					var layer = new Microsoft.Maps.Layer();
					layer.add([pushpin, polyline]);
					map.layers.insert(layer);
						
					"<?php } ?>";
				}
				loadMarkers();
                
            }
        </script>
        <script type='text/javascript' src='https://www.bing.com/api/maps/mapcontrol?key=AolKd8zPmhdgLpXCO3WEMw_kQzg-mf1bKzX0HIzrOp_PeYDrOt4g11vZBjXnHPxh&callback=loadMapScenario' async defer></script>
    </body>
	
</html>
