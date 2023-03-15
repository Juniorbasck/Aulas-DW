<html>
	<head>
    <meta charset="utf-8" />
		<title>Praticando formulario</title>

		<!-- Bootstrap início -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <style>
        
    
         .container input{
                width: 200px;
            }
        
        </style> 
	</head>
  <body>
    
        <h1>Tabuada</h1>
        <hr/>
        
        <form class="col-sm-6 offset-md-1 form" action="index.php" method="GET">
            <div class="container">
                <label name="num">Número</label>
                <input class="form-control" name="num" id="num">
                <button type="submit" class="mt-4 btn btn-success">Calcular média</button>
                <button type="submit" class="mt-4 btn btn-warning">Limpar</button>
            </div>
        </form>

        <hr/> 
        
        <?php
            
            $num = filter_input(INPUT_GET, "num", FILTER_SANITIZE_SPECIAL_CHARS);
        
        ?>

        <h3>Tabuada do <?php echo $num ?></h3>

        <?php

            for($x = 1; $x < 10; $x++){
                
                $result = $num * $x; 
          
                echo $num . ' x ' . $x . " = " . $result;
                echo '<br/>';
                
            }
        ?>

  </body>   	
</html>