<!DOCTYPE html>
<html lang="pt-br">
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Template PI</title>

 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

 <link href="styles/libs/bootstrap.min.css" rel="stylesheet">
 <link href="styles/main.css" rel="stylesheet">

</head>
<body> 

 <!-- Modal -->
<div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modalLabel">Excluir Item</h4>
      </div>
      <div class="modal-body">
        Deseja realmente excluir este item?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Sim</button>
  <button type="button" class="btn btn-default" data-dismiss="modal">N&atilde;o</button>
      </div>
    </div>
  </div>
</div>

  <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        
          <div class="navbar-header">
              <a class="navbar-brand" href="index.php">Kanino Store</a>
          </div>
          
          <ul class="nav navbar-nav">
              <li class="active"><a href="#">Dashboard</a></li>
              <li><a href="#">Departamentos</a></li>
              <li><a href="#">Produtos</a></li>
              <li><a href="#">Usuários</a></li>
          </ul>
          
           <ul class="nav navbar-nav navbar-right">
              <li><a href="#">{Bem-vindo Usuário}</a></li>
              <li><a href="index.php">Sair</a></li>
          </ul>
     </div>
  </nav>
  
 <div id="main" class="container-fluid" style="margin-top: 50px">
 
  <div id="top" class="row">
    <div class="col-sm-3">
      <h2>Usuários</h2>
    </div>
    <div class="col-sm-6">
      
      <!-- campo de busca -->
      <!--<div class="input-group h2">
        <input name="data[search]" class="form-control" id="search" type="text" placeholder="Pesquisar Itens">
        <span class="input-group-btn">
          <button class="btn btn-primary" type="submit">
            <span class="glyphicon glyphicon-search"></span>
          </button>
        </span>
      </div>-->
  </div> <!-- /#top -->
 
 
  
  <div id="list" class="row">
  
  <div class="table-responsive col-md-12">
    <table id="myTable" class="table table-striped" cellspacing="0" cellpadding="0">
      <thead>
        <tr>
          <th>ID</th>
          <th>Usuário</th>
          <th>Perfil</th>
          <th>Status</th>
          <th class="actions">Ações</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1001</td>
          <td>Lorem ipsum dolor sit amet, consectetur adipiscing</td>
          <td>Admin</td>
          <td>Ativo</td>
          <td class="actions">
            <a class="btn btn-warning btn-xs" href="edit.html">Editar</a>
            <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a>
          </td>
        </tr>
        <tr>
          <td>1002</td>
          <td>Lorem ipsum dolor sit amet, consectetur adipiscing</td>
          <td>Admin</td>
          <td>Ativo</td>
          <td class="actions">
            <a class="btn btn-warning btn-xs" href="edit.html">Editar</a>
            <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a>
          </td>
        </tr>
        <tr>
          <td>1003</td>
          <td>Lorem ipsum dolor sit amet, consectetur adipiscing</td>
          <td>Admin</td>
          <td>Ativo</td>
          <td class="actions">
            <a class="btn btn-warning btn-xs" href="edit.html">Editar</a>
            <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a>
          </td>
        </tr>
        <tr>
          <td>1004</td>
          <td>Lorem ipsum dolor sit amet, consectetur adipiscing</td>
          <td>Admin</td>
          <td>Ativo</td>
          <td class="actions">
            <a class="btn btn-warning btn-xs" href="edit.html">Editar</a>
            <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a>
          </td>
        </tr>
        <tr>
          <td>1005</td>
          <td>Lorem ipsum dolor sit amet, consectetur adipiscing</td>
          <td>Admin</td>
          <td>Ativo</td>
          <td class="actions">
            <a class="btn btn-warning btn-xs" href="edit.html">Editar</a>
            <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a>
          </td>
        </tr>
        <tr>
          <td>1006</td>
          <td>Lorem ipsum dolor sit amet, consectetur adipiscing</td>
          <td>Admin</td>
          <td>Ativo</td>
          <td class="actions">
            <a class="btn btn-warning btn-xs" href="edit.html">Editar</a>
            <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a>
          </td>
        </tr>
        <tr>
          <td>1007</td>
          <td>Lorem ipsum dolor sit amet, consectetur adipiscing</td>
          <td>Admin</td>
          <td>Ativo</td>
          <td class="actions">
            <a class="btn btn-warning btn-xs" href="edit.html">Editar</a>
            <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a>
          </td>
        </tr>
        <tr>
          <td>1008</td>
          <td>Lorem ipsum dolor sit amet, consectetur adipiscing</td>
          <td>Admin</td>
          <td>Ativo</td>
          <td class="actions">
            <a class="btn btn-warning btn-xs" href="edit.html">Editar</a>
            <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a>
          </td>
        </tr>
        <tr>
          <td>1009</td>
          <td>Lorem ipsum dolor sit amet, consectetur adipiscing</td>
          <td>Admin</td>
          <td>Ativo</td>
          <td class="actions">
            <a class="btn btn-warning btn-xs" href="edit.html">Editar</a>
            <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a>
          </td>
        </tr>
        <tr>
          <td>1010</td>
          <td>Lorem ipsum dolor sit amet, consectetur adipiscing</td>
          <td>Admin</td>
          <td>Ativo</td>
          <td class="actions">
            <a class="btn btn-warning btn-xs" href="edit.html">Editar</a>
            <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  
</div> <!-- /#list -->
  
 

<!-- Modal -->
<div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modalLabel">Excluir Item</h4>
      </div>
      <div class="modal-body">
        Deseja realmente excluir este item?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Sim</button>
  <button type="button" class="btn btn-default" data-dismiss="modal">N&atilde;o</button>
      </div>
    </div>
  </div>
</div>

<?php require('templates/footer.php'); ?>
  
  <script src="scripts/libs/jquery-1.11.3.min.js"></script>
  <script src="scripts/libs/bootstrap.min.js"></script>

</body>
</html>