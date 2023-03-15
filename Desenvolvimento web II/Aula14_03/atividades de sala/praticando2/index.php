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
          

        <h1>Contador</h1>
        <hr/>

       <form class="col-sm-6 offset-md-1 form" action="destino.php" method="POST">
            <div class="container">
                <label name="num1">Número1</label>
                <input class="form-control" name="num1" id="num1">
                <label name="num2">Número2</label>
                <input class="form-control" name="num2" id="num2">
                <label name="num3">Incremento</label>
                <input class="form-control" name="num3" id="num3">

                <button type="submit" class="mt-4 btn btn-success">Calcular média</button>
                <button type="submit" class="mt-4 btn btn-warning">Limpar</button>
            </div>
        </form>

  </body>   	
</html>