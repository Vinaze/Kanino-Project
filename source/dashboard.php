<!DOCTYPE html>
<html lang="en">
<head>
	  <title>Administração - Kanino Store</title>
	  <meta charset="utf-8">
	  
	  <meta name="viewport" content="width=device-width, initial-scale=1">
  	  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	  <link rel="stylesheet" href="styles/main.css">
	  <script src="scripts/libs/jquery-1.11.3.min.js"></script>
	  <script src="scripts/libs/bootstrap.min.js"></script>
	  
</head>
<body>
<?php require('templates/header.php'); ?>

	<div class="container">
		<div class="page-header">
	  		<h1>Dashboard <small>/ home</small></h1>
		</div>
	  	<div class="jumbotron">
		    <div class="row">
			  <div class="col-md-4" ><a href="#" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-list"></span></br>Departamentos</a></div>
			  <div class="col-md-4"><a href="#" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-barcode"></span></br>Produtos</a></div>
			  <div class="col-md-4"><a href="#" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-user"></span></br>Usuários</a></div>
			</div>   
	  	</div>
	 </div>
	 
  <?php require('templates/footer.php'); ?>
</body>
</html>
