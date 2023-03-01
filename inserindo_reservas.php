<?php 
    include 'conn/connect.php';
    if($_POST){
    $n_messa = $_POST['n_messa'];
    $n_pessoas = $_POST['n_pessoas'];
    $data_reserva = $_POST['data_reserva'];
    $hora = $_POST['hora'];
    $inserereservas = "INSERT reservas
                   (n_messa, n_pessoas, data_reserva, hora)
                    VALUES
                    ('$n_messa','$n_pessoas','$data_reserva','$hora')
                    ";
    $inserecliente = "INSERT pedidos_reservas
    (cpf, nome, email)
     VALUES
     ('$cpf','$nome','$email')
     ";
      $cpf = $_POST['cpf'];
      $nome = $_POST['nome'];
      $email = $_POST['email'];

      
      
    $resultado = $conn->query($inserereservas = $inserecliente);
    // após a gravação bem sucedida da reserva, vai para login.
    if(mysqli_insert_id($conn)){
        header('location:adm_options.php');
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../tiphpnt/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Reserva</title>
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-offset-2 col-sm-6 col-md-8">
                <h2 class="breadcrumb text-danger">
                    <a href="reservas.php">
                        <button class="btn btn-danger">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </button>
                    </a>
                    Cadastrando Reserva
                </h2>   
                <div class="humbnail">
                    <div class="alert alert-danger" role="alert">
                    <form action="cliente_login.php" method="post" name="form_cliente_login.php"
                         enctype="multipart/form-data" id="form_cliente_login.php" >
                            <div class="hidden"> <label for="n_messa">Numero da Messa: </label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                </span>
                                <input type="text" name="n_messa" id="n_messa" 
                                class="form-control" placeholder="Digite o nome do Usuario"
                                 maxlength="100" required>
                            </div></div>
                            <label for="n_pessoas">Numero de Pessoas: </label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                                </span>
                                <input type="number" name="n_pessoas" id="n_pessoas" 
                                class="form-control" placeholder="Digite o numero de pessoas"
                                 maxlength="100" required>
                            </div>
                            <label for="data_reserva">Data da reserva: </label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
                                </span>
                                <input type="date" name="data_reserva" id="data_reserva" 
                                class="form-control" placeholder="Digite o nome do Usuario"
                                 maxlength="100" required>
                            </div>
                         <label for="hora">Hora da reserva: </label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                </span>
                                <input type="time" name="hora" id="hora" 
                                class="form-control" placeholder="Digite a Hora da Reserva"
                                 maxlength="100" required>
                            </div>
                            <label for="cpf">Cpf: </label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                                </span>
                                <input type="text" name="cpf" id="cpf" 
                                class="form-control" placeholder="Digite o seu Cpf" 
                                maxlength="100" required>
                            </div>
                            <label for="nome">nome Completo: </label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                                </span>
                                <input type="text" name="nome" id="nome" 
                                class="form-control" placeholder="Digite o Nome Completo"
                                 maxlength="100" required>
                            </div>
                            <label for="email">Email: </label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                                </span>
                                <input type="email" name="email" id="email" 
                                class="form-control" placeholder="Digite o Seu Email" 
                                maxlength="100" required>
                            </div>
                            <br>                          
                           <input type="submit" name="enviar" id="enviar"
                             class="btn btn-danger btn-block" value="Cadastrar">
                            </div>
                            </div>
                        </form>
                    </div>
                </div> 
            </div>  
        </div>
    </main>
</body>
</html>