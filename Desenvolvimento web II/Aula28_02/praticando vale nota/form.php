<html>
	<head>
    <meta charset="utf-8" />
		<title>Praticando formulario</title>

		<!-- Bootstrap início -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	</head>
  <body>

    <?php
      $tituloPag = filter_input(INPUT_POST, "paginaTitulo", FILTER_SANITIZE_SPECIAL_CHARS);
      $textoCorpo = filter_input(INPUT_POST, "corpo", FILTER_SANITIZE_SPECIAL_CHARS); 
      $corText = filter_input(INPUT_POST, "corText", FILTER_SANITIZE_SPECIAL_CHARS); 
      $imagem = filter_input(INPUT_POST, "url", FILTER_SANITIZE_SPECIAL_CHARS); 
      $link = filter_input(INPUT_POST, "urlmg", FILTER_SANITIZE_SPECIAL_CHARS); 
      $corFundo = filter_input(INPUT_POST, "planoFundo", FILTER_SANITIZE_SPECIAL_CHARS); 

     
    ?>

    <div class="corTextos">
        
        <h1><?php echo $tituloPag; ?></h1>

        <hr>

        <p><?php echo $textoCorpo;?>

        <figure>
            <img src=<?php echo $imagem; ?> alt="Minha Figura" class="img"><br>
            <figcaption><a href=><?php echo $link; ?></a></figcaption>
        </figure>

    </div>


    <style>
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