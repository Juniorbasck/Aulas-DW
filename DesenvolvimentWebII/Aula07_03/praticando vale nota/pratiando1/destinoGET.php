<html>
	<head>
    <meta charset="utf-8" />
		<title>Praticando formulario</title>

		<!-- Bootstrap início -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	</head>
  <body>
    
  <h1>Destino GET</h1>
  <hr>

  <?php
    $nome = filter_input(INPUT_GET, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_GET, "email", FILTER_SANITIZE_SPECIAL_CHARS);
    $fundo = filter_input(INPUT_GET, "fundo", FILTER_SANITIZE_SPECIAL_CHARS);

    if($nome){
      echo "<p>Nome informado: $nome<br>Email: $email<p/>";
    }
  ?>
  
  <div>

    <?php
      if($fundo){
        
      }

    ?>
    <a href="destinoGET.php?nome=Junior&email=adilson.juniorcomunicaco@gmail.com&fundo= <?php echo $fundo?>">
      [nome = Junior | email = adilson.juniorcomunicaco@gmail.com]
    </a><br>

    <a href="destinoGET.php?nome=fernando&email=fernando.comunicaco@gmail.com&fundo= <?php echo $fundo?>">
      [nome = fernando | email = fernando.comunicaco@gmail.com]
    </a><br>

    <a href="destinoGET.php?">
      LIMPAR TUDO
    </a>
  </div>

   <div class="container">

     <a href="destinoGET.php?nome= <?php echo $nome ?>&<?php echo $email ?>&fundo=blue">
      <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAsJCQcJCQcJCQkJCwkJCQkJCQsJCwsMCwsLDA0QDBEODQ4MEhkSJRodJR0ZHxwpKRYlNzU2GioyPi0pMBk7IRP/2wBDAQcICAsJCxULCxUsHRkdLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCz/wAARCADqAN8DASIAAhEBAxEB/8QAFwABAQEBAAAAAAAAAAAAAAAAAAECB//EABkQAQEBAQEBAAAAAAAAAAAAAAABIRExQf/EABkBAQEBAQEBAAAAAAAAAAAAAAABAgMEB//EABYRAQEBAAAAAAAAAAAAAAAAAAARAf/aAAwDAQACEQMRAD8A5gA+vPAAKAAAAgA0AAAAAAAAACgqKoACACqCKCAOSgAAAgAoAAAAAKAAACwBRYIKhAUAEUUQUBAHJQAQAUAFAAABQAAABUUVARRRFRRQAAARQBAHJQBUAAAAAFABQAUFQEFQFUEBUBRRAFEUARVEAcwAAAAAAAUAAFEVFEUAAUEFFEUAAABQAVEAclAAAAAFAAFAUAFAAAAEVFAAAAVAFUAAZAclAAAAAVRBUUUABFFEUARUUEUFwABAUCiKKIKAyA5KAKABAFFRFEFUAAAABQABFBYAKqCKAaUBEUAZAc2gAAVFQABUVBVBFFABFAABQAVBUAUAAAQFAYAc2lBFRUVAFRRRFRRUVAUAABUAFBUAUOAgAAACiKDADDSgAAKAAAAAAACoKigCKoCLQABAAFRUABVGUUc1AAAFUAAAAAVAFBFBRFADgaCFABUAFRUAVAERRhoRQABQAAAAAVAUUABAAAAAAAAAADBTQZRRhoAAAUAAAFQFFBFADSAgAAAAAAqAKAIAAygJG1AIAAARREUFAAAAQgAAAAs9FEC/VgIoCAAAAP/Z">
     </a>

     <a href="destinoGET.php?nome= <?php echo $nome ?>&<?php echo $email ?>&fundo=green">
      <img src="https://www.pontoxtecidos.com.br/static/567/sku/155904889647122.jpg">
     </a>
    
     <a href="destinoGET.php?nome=<?php echo $nome ?>&<?php echo $email ?>&fundo=red">
      <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/62/Solid_red.svg/512px-Solid_red.svg.png?20150316143248">
     </a>

   </div>

    <style>
      
      .container{
        margin-left: 20%;
        margin-top: 150px;
        
      }

      img{
        max-width: 250;
      }
      
      body{
        background-color: <?php echo $fundo ?>;
      }
      
    </style> 

  </body>   	
</html>