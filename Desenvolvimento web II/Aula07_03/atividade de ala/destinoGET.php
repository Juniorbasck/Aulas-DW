<html>
	<head>
    <meta charset="utf-8" />
		<title>Praticando formulario</title>

		<!-- Bootstrap início -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	</head>
  <body>

    <?php
      $tituloPag = filter_input(INPUT_GET, "paginaTitulo", FILTER_SANITIZE_SPECIAL_CHARS);
      $textoCorpo = filter_input(INPUT_GET, "corpo", FILTER_SANITIZE_SPECIAL_CHARS); 
      $corFundo = filter_input(INPUT_GET, "corFundo", FILTER_SANITIZE_SPECIAL_CHARS); 

     
    ?>

    <div class="corTextos">
        
        <h1><?php echo $tituloPag; ?></h1>

        <hr>

        <p><?php echo $textoCorpo;?>

        <?php echo '<br />'; ?>
        <?php echo '<br />'; ?>

        <a href="destinoGET.php?paginaTitulo=ADILON&corpo=TEeeetstets.com&corFundo=green">
            ENVIAR DADO
        </a>
    </div>
    
    <div class="caixas vermelha">
          <a href="destinoGET.php?paginaTitulo=ADILON&corpo=TEeeetstets.com&corFundo=red">
             <img src="https://th.bing.com/th/id/OIP.PaFPQSOtGYcQBrR81emBDwHaHa?w=179&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7"><br>
          </a>]
          
    </div>

    <div class="caixas">
          <a class="azul" href="destinoGET.php?paginaTitulo=ADILON&corpo=TEeeetstets.com&corFundo=blue">
            <img src="https://th.bing.com/th/id/OIP.zuPTlxjq8A0hSo_4KUVq-AHaFj?w=201&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7"><br>
          </a>
    </div>

    <style>
      .azul{
        margin-top: 0px;
      }
      .vermelha{
        border: 1px solid black;
        margin-left: 250px;
      }
      .caixas{
        display: inline-block;
      }

      body{
        background-color: <?php echo $corFundo; ?>;
      }

      .corTextos{
        color: <?php echo $corText; ?>;
      }

      .img{
        max-width: 800px;
      }

    </style> 
  </body>   	
</html>