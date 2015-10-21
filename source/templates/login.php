<html lang="en-US">
<head>
	  <meta charset="utf-8">
	  <title>Administração - Login - Kanino Store</title>
	  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Varela+Round">
	  <link rel="stylesheet" type="text/css" href="styles/login.css"> 
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
      <script src="./scripts/libs/jquery.validate.js"></script>
      <script>
$(document).ready( function() {
    $("#loginForm").validate({
        rules: {
            usuario: {
                required: true, minlength: 3
            },
            senha: {
                required: true,
            },
        },
        messages: {
            usuario: {
                required: "Informe um Usuário", minlength: "Deve conter, no mínimo, 3 caracteres"
            },
            senha: {
                required: "Informe a Senha do Usuário",
            },
        }
    });
});
</script>
      
</head>

<body>
	
  <div class="container">
  	<div id="login">
      	<h2><span class="fontawesome-lock"></span>Login - Kanino Store</h2>
      <form id="loginForm" method="POST">
	  	<?php 
			if (isset($msg_erro)) {
				echo " <div class='erro'> $msg_erro </div>";}
	  	?>
        <fieldset>
          <p>
            <input type="text" id="usuario" name="usuario" placeholder="Usuário">
          </p>
          <p>
            <input type="password" id="senha" name="senha" placeholder="Senha">
          </p>
          <p>
            <input type="submit" name="entrar" value="Entrar">
          </p>
        </fieldset>
      </form>
    </div>
  </div>
  
</body>
</html>