<?php 
    include 'acesso_com.php';
    include '../conn/connect.php';
    $lista = $conn->query("select * from tbusuarios");
    $row = $lista->fetch_assoc();
    $rows = $lista->num_rows;
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Lista Usuarios</title>
</head>
<body>
        <?php include "menu_adm.php"; ?>
        <main class="container">
            <h2 class="breadcrumb alert-danger">Lista de Usuarios</h2>
                  <table class="table table-hover table-codensed tb-opacidade bg-danger">
                    <thead>
                        <th class="hidden">ID</th>
                        <th>LOGIN</th>
                        <th>SENHA</th>
                        <th>NIVEL SENHA</th>
                        <th>
                    <a href="usuarios_insere.php" target="_self" class="btn btn-block btn-primary btn-xs" role="button">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                        <span class="hidden-xs">ADICIONAR</span>
                    </a>
                </th>
                    </thead>
                  </table>
                  <tbody>
                  <?php do{ ?>
                    <tr>
                        <td class="hidden">
                            <?php echo $row['id_usuario'];?>
                        </td>
                        <td>
                            <?php ?>
                        </td>
                    </tr>
                    <?php }while($row = $lista->fetch_assoc());?>
                  </tbody>
        </main>
</body>
</html>
