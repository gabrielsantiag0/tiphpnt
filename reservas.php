<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/reserva.css">
    <title>Document</title>
</head>
<body>
<body>
<?php include 'menu_publico.php'; ?>
        <div class="separando">
    <main>
        <div class="textofacaumareserva"><p><b>Faça Sua</b> Reserva</p>
    <h6>Tenha a comodidade de reservar a sua mesa conosco e apreciar um delicioso rodízio tranquilamente!
        além de conseguir descontos
    </h6>
    <div class="regras">
        <p><b>Regras</b> Da Sua RESERVA</p>
    <ul>
        <li>
        Apenas um pedido de reserva por dia para um mesmo cpf. 
        </li>
    </ul>
    <ul>
        <li>
       O cliente receberá uma notificação por email (importante colocar o email correto).
        </li>
    </ul>
    <ul>
        <li>
            As reservas terão tolerância de no mínimo 48 horas de antecedência e no máximo 90 dias.
        </li>
    </ul>
    </div>
        </div>
    </main>
    <div class="imglugardentro"><img src="images/dentrochurascaria.jpg" alt=""></div>
</div>  
    <hr>
    <div class="textoo"><h1>RESERVA</h1></div> 
    <hr>
<div class="form_reservaaa">
    <form action="" name="form_reserva" id="form_reserva" method="post">
                        <p>
                            <span class="input-group">
                            <span class="input-group-addon" id="basic-addon1">
                                <span class="glyphicon glyphicon-user">

                                </span>

                            </span>
                            <input type="text" name="nome_reserva" placeholder="digite seu Nome Completo" aria-describedby="basic-addon1" class="form-control" required>
                        </span>
                    </p>
                    <p>
                            <span class="input-group">
                            <span class="input-group-addon" id="basic-addon1">
                                <span class="glyphicon glyphicon-user">

                                </span>
                                
                            </span>
                            <input type="text" name="cpf_reserva" placeholder="digite seu nome CPF" aria-describedby="basic-addon1" class="form-control" required>
                        </span>
                    </p>
                    <p>
                            <span class="input-group">
                            <span class="input-group-addon" id="basic-addon2">
                                <span class="glyphicon glyphicon-envelope">

                                </span>
                                
                            </span>
                            <input type="text" name="email_reserva" placeholder="digite seu nome Email" aria-describedby="basic-addon1" class="form-control" required>
                        </span>
                    </p>
                    <p>
                        <button class="btn btn-danger btn-block" aria-label="enviar" role="button">Enviar
                        <span class="glyphicon glyphicon-send" aria-hidden="true"></span>

                        </button>
                    </p>
                    </form>
                    <div class="panel-footer">
                <ul class=" links">
                    
                    <li><a href="index.php#home" class="text-danger"><span class="glyphicon glyphicon-home" aria-hidden="true">&nbsp;Home</span></a></li>
                    
                    <li><a href="index.php#destaques" class="text-danger"><span class="glyphicon glyphicon-ok-sign" aria-hidden="true">&nbsp;Destaques</span></a></li>
                
                    <li><a href="index.php#produtos" class="text-danger"><span class="glyphicon glyphicon-cutlery" aria-hidden="true"></span>&nbsp;Produtos</a></li>
                    
                    <li><a href="index.php#contato" class="text-danger"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>&nbsp;Contato</a></li>

                    <li><a href="admin/index.php" class="text-danger"><span class="glyphicon glyphicon-user" aria-hidden="true">&nbsp;Administraçao</span></a></li>
 
                    <li><a href="reservas.php" class="text-danger"><span class="glyphicon glyphicon-user" aria-hidden="true">&nbsp;Reserva</span></a></li>

                    <li><a href="reservas.php" class="text-danger"><span class="glyphicon glyphicon-cutlery" aria-hidden="true">&nbsp;Acompanhar Reserva</span></a></li>

                </ul>
</div>
                    
</div>
</div>
</body>
</html>
