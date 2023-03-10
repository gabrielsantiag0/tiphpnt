<?php 
    include '../tiphpnt/conn/connect.php';
    if(isset($_POST['cadastrar'])){
    $id_reservas = $_POST['id_reservas'];   
    $n_messa = $_POST['n_messa'];
    $n_pessoas = $_POST['n_pessoas'];
    $data_reserva = $_POST['data_reserva'];
    $hora = $_POST['hora'];
    $inserereservas = "INSERT reservas
                   (id_reservas, n_messa, n_pessoas, data_reserva, hora)
                    VALUES
                    ('$id_reservas', '$n_messa','$n_pessoas','$data_reserva','$hora')
                    ";
    $inserecliente = "INSERT pedidos_reservas
    (id_pedidos_reservas, cpf, nome, email)
     VALUES
     ('$id_pedidos_reservas', '$cpf','$nome','$email')
     ";
      $id_pedidos_reservas = $_POST['id_pedidos_reservas'];
      $cpf = $_POST['cpf'];
      $nome = $_POST['nome'];
      $email = $_POST['email'];
    $resultado = $conn->query($inserereservas = $inserecliente);
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../tiphpnt/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/estilo.css">
    <title>Reserva</title>
</head>
<body class="fundoo">
    <main class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-offset-2 col-sm-6 col-md-8">
                <h2 class="breadcrumb text-danger">
                    <a href="reservas.php">
                        <button class="btn btn-danger">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </button>
                    </a>
                    Cadastrando Reservas 
                </h2>
                    <div class="thumbnail">
                        <div class="alert alert-danger" role="alert">
                            <form action="" method="post" name="form_cadastrando_reserva" enctype="multipart/form-data"
                            id="form_cadatrando_reserva">
                            <label for="id_reservas">ID Reservas:</label>
                                
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                                    </span>
                                    <input type="number" name="id_reservas" id="id_reservas"
                                    class="form-control" placeholder="Digite o id da reserva"
                                    maxlength="100" required>
                                </div>

                                <label for="n_messa">Número da messa:</label>

                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                                    </span>
                                    <input type="number" name="n_messa" id="n_messa"
                                    class="form-control" placeholder="Digite o número da messa"
                                    required>
                                </div>

                                <label for="n_pessoas">Número de pessoas:</label>

                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                                    </span>
                                    <input type="number" name="n_pessoas" id="n_pessoas"
                                    class="form-control" placeholder="Digite o número de pessoas"
                                    required>
                                </div>

                                    <label for="data_reserva">Data da reserva:</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
                                        </span>
                                        <input type="date" name="data_reserva" id="data_reserva"
                                        class="form-control" placeholder="Digite a data da reserva"
                                        required>
                                    </div>

                                    <label for="hora">Hora da reserva:</label>

                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                        </span>
                                        <input type="time" name="hora" id="hora"
                                        class="form-control" placeholder="Digite a hora da reserva" required>
                                    </div>

                                    <label for="id_pedidos_reservas">Id do pedido da reserva:</label>

                                    <div class="input-group">
                                        <span class="input-group">
                                            <span class="glyphicon glyphicon" aria-hidden="true"></span>
                                        </span>
                                        <input type="number" name="id_pedidos_reservas" id="id_pedidos_reservas"
                                        class="form-control" placeholder="Id do pedido da reserva" >
                                    </div>

                                    <label for="cpf">Digite seu CPF:</label>
                                    <div class="input-group">
                                        <span class="inpit-group">
                                            <span class="glyphicon glyphicon" aria-hidden="true"></span>
                                        </span>
                                        <input type="text" name="cpf" id="cpf"
                                        class="form-control" placeholder="CPF" required>
                                    </div>

                                    <label for="nome">Digite seu nome:</label>
                                    <div class="input-group">
                                        <span class="input-group">
                                            <span aria-hidden="true"></span>
                                        </span>
                                        <input type="text" name="nome" id="nome"
                                        class="form-control" placeholder="NOME" maxlength="100" required>
                                    </div>

                                    <label for="email">Digite seu e-mail:</label>

                                    <div class="input-group">
                                        <span class="input-group">
                                            <span aria-hidden="true"></span>
                                            <input type="email" name="email" id="email"
                                            class="form-control" placeholder="E-MAIL" required>
                                        </span>
                                      <td >
                                    <button 
                                             data-id="<?php echo $row['id_pedidos_reservas'],['id_reservas'];?>"
                                             class=" finalizar btn btn-danger btn-block">
                                         <span class="glyphicon glyphicon-copy"></span>
                                             <span class="hidden-xs">Finalizar Reserva</span>
                                    </button>
                                </td>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </main>
</body>
</html>