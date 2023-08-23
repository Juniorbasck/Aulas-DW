<html>
	<head>
    <meta charset="utf-8" />
		<title>Praticando formulario</title>

		<!-- Bootstrap início -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	</head>
  <body>

    <?php
      $num1 = filter_input(INPUT_POST, "num1", FILTER_SANITIZE_SPECIAL_CHARS);
      $num2 = filter_input(INPUT_POST, "num2", FILTER_SANITIZE_SPECIAL_CHARS);
      $num3 = filter_input(INPUT_POST, "num3", FILTER_SANITIZE_SPECIAL_CHARS);
    
      $resultado = ($num1 + $num2 + $num3)/3; 

      if($resultado < 4){
         $corTexto = 'red';
         $resposta = 'REPROVADO';

      }else if($resultado > 4 && $resultado < 6){
        $corTexto = 'orange';
         $resposta = 'DE RECUPERAÇÃO'; 

      }else{
         $corTexto = 'green';
         $resposta = 'PROVADO';

      }

        
    ?>

    <h1>Praticando - Calculadora média</h1>
    <hr> 

    <p>Um aluno com as notas <?php echo $num1 ?>, <?php echo $num2 ?> e <?php echo $num3 ?> tem a média igual a  <?php echo $resultado ?></p>
    <br/>

    <php>Com essa média o aluno está <span class="corTextos"><?php echo $resposta ?></span></p>

    <style>
    
    .corTextos{
        color: <?php echo $corTexto; ?>;
        text-decoration: underline;
     }


    </style> 
  </body>   	
</html>