<?php 
    include 'acesso_com.php';
    include '../conn/connect.php';

    // if($_GET['gravar']){
    //     $nome = "imagem1";
    //     $novoNome = uniqid(); 
    //     print_r($_FILES['foto']);

    // }

    if($_POST){
    // se o usuario enviou o formulário
if (isset($_POST['enviar'])){
    $nome_img = $_FILES['imagem_produto']['name'];
    $tmp_img = $_FILES['imagem_produto']['tmp_name'];
    $dir_img = "../images/".$nome_img;
    move_uploaded_file($tmp_img, $dir_img);

    }
    
    $id_tipo = $_POST['id_tipo'];
    $sigla_tipo = $_POST['sigla_tipo'];
    $rotulo_tipo = $_POST['rotulo_tipo'];

    $insereProd = "INSERT tbtipos 
                   (id_tipo,sigla_tipo,rotulo_tipo)
                    VALUES
                    ('$id_tipo','$sigla_tipo','$rotulo_tipo')
                    ";
    $resultado = $conn -> query($insereProd);
    // após a gravação bem sucedida do produto, volata (atualiza) lista.
    if(mysqli_insert_id($conn)){
        header('location: tipos_lista.php');
    }

   
}
 // selecionar os dados de chave estrangeira (Lista de tipos de produtos) 
 $consulta_fk = "select * from tbtipos order by rotulo_tipo asc";
 $lista_fk = $conn -> query($consulta_fk);
 $row_fk = $lista_fk -> fetch_assoc();
 $nlinhas = $lista_fk -> num_rows;
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Insere Tipos</title>
</head>
<body>
        <?php include "menu_adm.php";?>
        <main class="container">
            <div class="row">
                        <div class="col-xs-12 col-sm-offset-2 col-sm-6 col-md-8">
                            <h2 class="breadcrumb text-danger">
                            <h2 class="breadcrumb text-danger">
                    <a href="tipos_lista.php">
                        <button class="btn btn-danger">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </button>
                    </a>
                    Inserindo Tipos
                </h2> 
    <div class="humbnail">
        <div class="alert alert-danger" role="alert">
        <form action="tipos_insere.php" method="post" name="form_tipos_insere" enctype="multipart/form-data" id="form_tipos_insere" >
            <label for="id_tipo">SIGLA:</label>
            <div class="input-group">
                 <span class="input-group-addon">
                <span class="glyphicon glyphicon-cutlery" aria-hidden="true"></span>
                </span>
                <input type="text" name="sigla_tipo" id="sigla_tipo" class="form-control" placeholder="Digite a Sigla do tipo" maxlength="100" required>
                </div>
            <label for="id_tipo">ROTULO:</label>
            <div class="input-group">
                 <span class="input-group-addon">
                <span class="glyphicon glyphicon-cutlery" aria-hidden="true"></span>
                </span>
                <input type="text" name="rotulo_tipo" id="rotulo_tipo" class="form-control" placeholder="Digite o Rotulo" maxlength="100" required>
                </div>
                <br>
                     <input type="submit" name="enviar" id="enviar" class="btn btn-danger btn-block" value="Cadastrar">
                </form>
        </div>
    </div>



                </div>
            </div>

        </main>
</body>
</html>