<?php 
    include 'acesso_com.php';
    include '../conn/connect.php';
    $lista = $conn->query("select * from reservas");
    $row = $lista->fetch_assoc();
    $rows = $lista->num_rows;
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista De Reservas</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/lista reserva.css">
</head>
<body>
<?php include "menu_adm.php"; ?>
    <main class="">
   <h2 class="breadcrumb alert-danger text-center">Lista De Reservas</h2>
   <table class="table bg-danger"> 
       <thead>
        <tr>
        <th>ID</th>
        <th>Número da messa</th>
        <th>Número de pessoas</th>
        <th>Data da reserva</th>
        <th>Hora da reserva</th>
        <th>
                <!-- php $cc = $conn->query('select id_tipo_produto as possui from tbprodutos where id_tipo_produto') -->
            
        </th>
       </thead>   
       <tbody>

        <?php do{  ?>
                <tr>
                    <td>
                        <?php  echo $row['id_reservas'];?>
                    </td>
                    <td>
                        <?php echo $row['n_messa'];?>
                    </td>
                    <td>
                        <?php echo $row['n_pessoa'];?>
                    </td>
                    <td>
                        <?php echo $row['data_reserva'];?>
                    </td>
                    <td>
                        <?php echo $row['hora_reserva']?>
                    </td>
            <td>
            <a href="tipos_insere.php?id_reservas=<?php echo $row['id_reservas'];?>" role="button" class="btn btn-warning btn-block btn-xs">
                            <span class="glyphicon glyphicon-refresh"></span>
                                <span class="hidden-xs">ALTERAR</span>
                            </a>
            <button 
                      data-nome="<?php echo $row['id_reservas'];?>" 
                      data-nome="<?php echo $row['n_messa'];?>"
                      data-nome="<?php echo $row['n_pessoa'];?>"
                      data-nome="<?php echo $row['data_reserva'];?>"
                      data-nome="<?php echo $row['hora_reserva'];?>"
                     class="delete btn btn-xs btn-block btn-danger"
                      >
                      <span class="glyphicon glyphicon-trash"></span>
                      <span class="hidden-xs">EXCLUIR</span>
                </button>
            </td>
            </tr>
<?php }while($row = $lista->fetch_assoc());?>
    </tbody>
   </table>
</main>
<div class="modal fade" id="modalEdit" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Vamos deletar?</h4>
                    <button class="close" data-dismiss="modal" type="button">
                        &times;
                    </button>
                </div>
                <div class="modal-body">
                    Deseja mesmo excluir o item?
                    <h4><span class="nome text-danger"></span></h4>
                </div>
                <div class="modal-footer">
                    <a href="#" type="button" class="btn btn-danger delete-yes">
                        Confirmar
                    </a>
                    <button class="btn btn-success" data-dismiss="modal">
                        Cancelar
                    </button>
                </div>
            </div>
        </div> 
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script type="text/javascript">
    $('.delete').on('click',function(){
        var nome = $(this).data('nome'); //busca o nome com a descrição (data-nome)
        var id = $(this).data('id'); // busca o id (data-id)
        //console.log(id + ' - ' + nome); //exibe no console
        $('span.nome').text(nome); // insere o nome do item na confirmação
        $('a.delete-yes').attr('href','tipos_excluir.php?id_tipo='+id); //chama o arquivo php para excluir o produto
        $('#modalEdit').modal('show'); // chamar o modal
    });
</script>
</html>