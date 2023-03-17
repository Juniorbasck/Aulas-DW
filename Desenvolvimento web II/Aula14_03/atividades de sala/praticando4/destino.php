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
        
        <h3>Parâmetros informados</h3>

        <?php
            
            $num1 = filter_input(INPUT_POST, "num1", FILTER_SANITIZE_SPECIAL_CHARS);
            $num2 = filter_input(INPUT_POST, "num2", FILTER_SANITIZE_SPECIAL_CHARS);
            $incremento = filter_input(INPUT_POST, "num3", FILTER_SANITIZE_SPECIAL_CHARS);
            
        ?>


        <?php 
            
           
     
         
        ?>
     

  </body>   	
</html>