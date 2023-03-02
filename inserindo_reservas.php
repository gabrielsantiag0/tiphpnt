<?php 
    include 'conn/connect.php';
    if($_POST){
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
    
</body>
</html>