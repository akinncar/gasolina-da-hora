<!doctype html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min>
    <?php
      include("conexao.php");
      include("navbar.php");
    ?>


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <title>Postos Sul</title>
  </head>
  <body>
    
    <div class="cinza">
      <article>
        <h2>
          <a href='index.php' class="titulo"> GASOLINA DA HORA </a>
        </h2>
        <p>
          Saiba o preço de seus postos favoritos sem sair de casa.
        </p>
      </article>

      <div class="topico">
        <ul>
          <li>
            <p>
              Preço do combustível em tempo real
            </p>
          </li>
          <li>
            <p>
              Localize com facilidade seu posto
            </p>
          </li>
          <li>
            <p>
                Descubra novos pontos para abastecer seu carro
            </p>
          </li>
          <li>
            <p>
              Encontre o melhor preço
            </p>
          </li>
        </ul>
      </div>
    </div>
    <div class="pesquisa_cidades">
      <center>
        <div class="form_cidades">
        <form action="" method="GET" name="form_cidades">
          <a class="botao_pesquisa" href="map.php" >Mapa</a>
          <select class="cidades" name="cidadess">
            <option name="selecione">Selecione...</option>
            <option name="tubarao_sc">Tubarão</option>
          </select>
          <input class="botao_pesquisa" type="submit" name="submit" value="Pesquisar">
        </form>
		</div>
        
		
		<?php
          if (isset($_GET['cidadess']))
          {
            $var_cidade = $_GET['cidadess'];
            $var_tubarao = "Tubarão";
            if ($var_cidade == $var_tubarao)
            {
              echo '<meta HTTP-EQUIV="Refresh" CONTENT="0; URL=tubarao_sc.php">';
              die;
            }
            elseif($var_cidade == "Selecione...")
            {
              echo '<meta HTTP-EQUIV="Refresh" CONTENT="0; URL=index.php">';
              die;
            }
          }
        ?>
		
	
      </center>
    </div>
  </body>
</html>

