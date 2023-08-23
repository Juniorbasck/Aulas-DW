<html>
	<head>
    <meta charset="utf-8" />
		<title>Praticando formulario</title>

		<!-- Bootstrap início -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <style>

            *{
                margin: 10px;
            }
            

        </style> 
	</head>
  <body>
        
        <h3>Praticando 4 - Gerador de tabela</h3>
        <hr>

        
        <?php
            
            $num1 = filter_input(INPUT_POST, "num1", FILTER_SANITIZE_SPECIAL_CHARS);
            $num2 = filter_input(INPUT_POST, "num2", FILTER_SANITIZE_SPECIAL_CHARS);
            $estilo = filter_input(INPUT_POST, "estilo", FILTER_SANITIZE_SPECIAL_CHARS);
            
        ?>

        <h4>Tabela <?php echo $num1 ?>x<?php echo $num2 ?></h4>
        
        <h4> <?php echo $estilo ?> </h4>

        <Table class="table  <?php echo $estilo ?>">

            <?php

                for ($i = 0; $i < $num1; $i++) {

                    echo "<tr>";
                        for ($j = 0; $j < $num2; $j++) {
                            echo "<td>-","</td>";
                        }
                        
                    echo "</tr>";
                }
              
            ?>
        </Table>

       

  </body>   	
</html>