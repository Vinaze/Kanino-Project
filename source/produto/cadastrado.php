<html>
    <head>
        <meta charset="utf-8">
        <title>Projeto Rok - Kanino</title>
        <link rel="stylesheet" type="text/css" href="../styles/libs/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../styles/main.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>

        <?php require('../templates/header.php'); ?>
         
        <!--FORMULÁRIO-->
        <div class="container">
            <div class="row">
                <h3 class="col-sm-12">Formulário do Produto</h3>
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Produtos</a></li>
                    <li class="active">Cadastrar Novo</li>
                </ol>
            </div>
        
            <form id="form1" method="post" action="..." class="form-horizontal">
            
            <!--IMAGENS - BOTÕES - VALORES -->
                <div class="breadcrumb row">
                    <!-- IMAGEM -->   
                    <div class="row">
                        <div class="col-ms-6 col-md-4"> 
                            <img src="../images/add_photo.jpg" alt="add_photo" class="img-thumbnail img-responsive">
                            <input type="file" id="imageUpload"/>
                        </div>

                        <!-- BOTÕES -->
                        <div class="control-group text-right">
                            <button type="submit" class="btn btn-warning" id="salvarBtn" onclick="validate()">Salvar</button>
                            <button type="reset" class="btn btn-warning" id="deletarBtn">Deletar</button>
                            <button type="submit" class="btn btn-warning" id="voltarBtn" href="index.html">Voltar</button> 
                        </div>
                     

                        <!-- QUANTIDADE MÍNIMA - PREÇO -->
                        <div class="col-md-2">
                            <label class="control-label">Quantidade Mínima:</label>
                            <div class="control-group">
                                <input type="text" class="form-control"  id="qntd" placeholder="0"/>
                            </div>

                            <label class="control-label">Preço:</label>
                            <div class="control-group">
                                <input type="text" class="form-control"  id="valor" placeholder="R$ 0,00"/>
                            </div>
                        </div>
                    </div>
                        

                    <!-- DESCONTO - VALOR PROMCIONAL -->
                    <div class="row">
                        <div class="col-xs-2 col-md-2">
                            <label class="control-label">Desconto(%):</label>
                            <div class="control-group">
                                <input type="text" class="form-control"  id="desconto" placeholder="0%"/>
                            </div> 
                        </div>
                        <div class="col-md-2">
                            <label class="control-label">Valor Promocional:</label>
                            <div class="control-group">
                                <input type="text" class="form-control"  id="valorPromocional" placeholder="R$ 0,00"/>
                            </div>
                        </div>
                    </div>

                    <!-- NOME PRODUTO -->
                    <div class="row">
                        <div class="col-md-8">
                            <label class="control-label">Nome:</label>
                            <div class="control-group">
                                <input type="text" class="form-control" id="nomeProduto" placeholder="Nome do Produto"/>
                            </div>  
                        </div>
                    </div><br>

                    <!--  DESCRIÇÃO -->
                    <div class="row">
                        <div class="col-md-8">
                            <label>Descrição do Produto:</label>
                            <textarea class="form-control" id="descricao"></textarea><br>
                        </div>
                    </div>

                    <!-- BOTÕES -->
                    <div class="row">
                        <div class="control-group text-right">
                            <button type="submit" class="btn btn-warning" id="salvarBtn" onclick="validate()" >Salvar</button>
                            <button type="reset" class="btn btn-warning" id="deletarBtn">Deletar</button>
                            <button type="submit" class="btn btn-warning" id="voltarBtn" href="index.html">Voltar</button>
                        </div>
                    </div>
                </div>
                <!-- END FORM-->    
            </form>
        </div>

         <?php require('../templates/footer.php'); ?>

        <script type="text/javascript" src="../scripts/libs/jquery-1.11.3.min.js"></script>
        <script type="text/javascript" src="../scripts/libs/bootstrap.min.js"></script>
        <script type="text/javascript" src="../scripts/main.js"></script>
    </body>
</html>
