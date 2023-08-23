<html>
	<head>
    <meta charset="utf-8" />
		<title>Praticando formulario</title>

		<!-- Bootstrap início -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


        <style> 
            img{
                max-width: 220px;
            }
            
            .imagens{
                display: inline-block;
            }

            body{
             background-color: #d3d3d3;  
            }
        </style> 
	</head>
  <body>

    <h1>Praticando - Animais</h1>
    <hr/>
    
    <?php 

        $animal = filter_input(INPUT_GET, "animal", FILTER_SANITIZE_SPECIAL_CHARS);
        $img = filter_input(INPUT_GET, "img", FILTER_SANITIZE_SPECIAL_CHARS);
        $nome = filter_input(INPUT_GET, "nome", FILTER_SANITIZE_SPECIAL_CHARS);

        if($animal){
            switch($animal){
                case '1';
                    $nome = 'Onça';
                    $img = './onça.jfif';
                    echo "<p>Onça é um bom animal</p>";
                    break;
                case '2';
                     $nome = 'Golfinho';
                     $img = './golfinho.webp';
                    echo "<p>Golfinho é um bom animal</p>";
                    break;
                case '3';
                    $nome = 'Veado';
                    $img = './viado.jfif';
                    echo "<p>Veado é um bom animal</p>";
                    break;
                case '4';
                    $nome = 'macaquinho';
                    $img = './macaco.jfif';
                    echo "<p>macaco é um bom animal</p>";
                    break;
            }
        }
    ?>

    <?php
    if($animal == ''){
        echo "<div>
            <a class='imagens' href='animais.php?animal=1'> 
                <img src='./onça.jfif'>
            </a>
            <a class='imagens' href='animais.php?animal=2'> 
                <img src='./golfinho.webp'>
            </a>
            <a class='imagens' href='animais.php?animal=3'> 
                <img src='./viado.jfif'>
            </a>
            <a class='imagens' href='animais.php?animal=4s'> 
                <img src='./OIP (1).jfif'>
            </a>
        </div>";
    }else{
        echo "<div style='display:flex; flex-direction: column;'>
            <p>Você clicou em um <b>$nome</b>.</p>
            <img style='width: 30%' src='$img' />";  
            echo "<a href='./animais.php'>Voltar</a>
            </div>";
    }
    ?>

  </body>   	
</html>