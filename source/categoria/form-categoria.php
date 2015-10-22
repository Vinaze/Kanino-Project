<!DOCTYPE html>
<html lang="pt-br">
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>PI</title>

 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

 <link href="styles/libs/bootstrap.min.css" rel="stylesheet">
 <link href="styles/main.css" rel="stylesheet">

</head>
<body> 

<?php require('../templates/header.php'); ?>

<div id="main" class="container-fluid" style="margin-top: 20px">
   
<h3><label>Categoria / </label> <label>Brinquedos</label> </h3>
<div class="row">
  
<form class="form-horizontal" style="margin-top: 60px">

<fieldset>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Nome Categoria</label>  
  <div class="col-md-4">
  <input id="textinput" name="textinput" placeholder="Nome Categoria" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="textarea">Descrição</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="textarea" name="textarea"></textarea>
  </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="button1id"></label>
  <div class="col-md-8">
    <button id="button1id" name="button1id" class="btn btn-primary">Enviar</button>
    <button id="button2id" name="button2id" class="btn btn-inverse">Limpar</button>
  </div>
</div>

</fieldset>
</form>
  
</div>
  

  <script src="scripts/libs/jquery-1.11.3.min.js"></script>
  <script src="scripts/libs/bootstrap.min.js"></script>

</body>
</html>