<?php 
    include '../conn/connect.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Reserva</title>
</head>
<body class="fundofixo">
    <main class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-offset-2 col-sm-6 col-md-8">
                <h2 class="breadcrumb text-danger">
                    <a href="../index.php">
                        <button class="btn btn-danger">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </button>
                    </a>
                    Cadastrando Conta
                </h2>
                    <div class="thumbnail">
                        <div class="alert alert-danger" role="alert">
                            <form action="" method="post" name="form_cadastrando_reserva" enctype="multipart/form-data"
                            id="form_cadatrando_reserva">
                                    <label for="cpf">Digite seu CPF:</label>
                                    <div class="input-group">
                                        <span class="inpit-group">
                                            <span class="glyphicon glyphicon" aria-hidden="true"></span>
                                        </span>
                                        <input type="text" name="cpf" id="cpf"
                                        class="form-control" placeholder="CPF" required>
                                    </div>

                                    <label for="email">Digite seu e-mail:</label>
                                    <div class="input-group">
                                        <span class="input-group">
                                            <span aria-hidden="true"></span>
                                            <input type="email" name="email" id="email"
                                            class="form-control" placeholder="E-MAIL" required>
                                        </span>
                                    </div>

                                    <label for="nome">Digite sua senha:</label>
                                    <div class="input-group">
                                        <span class="input-group">
                                            <span aria-hidden="true"></span>
                                        </span>
                                        <input type="text" name="nome" id="nome"
                                        class="form-control" placeholder="Digite sua nova senha" maxlength="100" required>
                                    </div>

                                    
                                    <label for="nome">Digite sua senha novamente:</label>
                                    <div class="input-group">
                                        <span class="input-group">
                                            <span aria-hidden="true"></span>
                                        </span>
                                        <input type="text" name="nome" id="nome"
                                        class="form-control" placeholder="Digite sua senha novamente" maxlength="100" required>
                                    </div>
<br>
                                  
                                      <td >
                                    <button 
                                             data-id="<?php echo $row['id_pedidos_reservas'],['id_reservas'];?>"
                                             class=" finalizar btn btn-danger btn-block">
                                         <span class="glyphicon glyphicon-copy"></span>
                                             <span class="hidden-xs">Finalizar cadastro</span>
                                    </button>
                                </td>
<br>
<div class="alert">
                                <p>
                                    Você vai usar seu email e senha para fazer login
                                </p>
                                </div>    
                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </main>
</body>
</html>