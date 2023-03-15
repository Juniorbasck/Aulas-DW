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

            a{
                margin: 20px;
            }
        
            .texto{
                margin: 80px 0px 0px 400px;
            }

            .caixa{
                font-size: 2em;
                padding: 15px;
                border: 1px solid darkgreen;
                background-color: lightgreen;
            }

            .caixa1{
                font-size: 2em;
                padding: 15px;
                border: 1px solid red;
                background-color: lightcoral;
            }
        </style> 
	</head>
  <body>
    
        <h1>Praticando 3 - Número primos</h1>
        <hr/>

        <a href="index.php?numero=1">Número 1</a>
        <a href="index.php?numero=2">Número 2</a>
        <a href="index.php?numero=3">Número 3</a>
        <a href="index.php?numero=5">Número 5</a>
        <a href="index.php?numero=20">Número 20</a>
        <a href="index.php?numero=32">Número 32</a>
        <a href="index.php?numero=37">Número 37</a>
        
        <?php
              $numero = filter_input(INPUT_GET, "numero", FILTER_SANITIZE_SPECIAL_CHARS);
              

              $primo = true;
              for ($i = 2; $i <= $numero / 2; $i++) {
                  if ($numero % $i == 0) {
                      $primo = false;
                      break;
                  }
              }   
              
              if ($numero % 2 == 0) {
                $par_ou_impar = "par";
                } else {
                    $par_ou_impar = "ímpar";
                }

                if ($primo) {
                    echo "<p class=texto>O número <span class='caixa'>$numero</span> é <span class='caixa'>primo</span>. Além disso ele é um numero <span class='caixa'>$par_ou_impar.</span></p>";
                } else {
                    echo "<p class=texto>O número <span class='caixa1'>$numero</span>,<span class='caixa1'>não é primo</span>. Além disso ele é um numero <span class='caixa1'>$par_ou_impar.</span></p>";
                }
            
        ?>

  </body>   	
</html>