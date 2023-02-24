<?php
   use PHPMailer\PHPMailer\Exception;
   use PHPMailer\PHPMailer\SMTP;
   use PHPMailer\PHPMailer\PHPMailer;
   $mensagem = utf8_decode($_POST['comentario_contato']);
    $nome = utf8_decode($_POST['nome_contato']);
    $email = utf8_decode($_POST['email_contato']);
    require 'PHPMailer/php-mailer/PHPMailerAutoload.php';
    require 'PHPMailer.php';
    require  'SMTP.php';
    require 'Exception.php';

    $mail = new PHPMailer;
    $mail->isSMTP();
    //congiguração do servidor de E-mail

    $mail->Host = "smtp.yahoo.com.";
    $mail->Port= "587";
    $mail->SMTPAuth = true;
    $mail->SMTPSecure= "tls";
    $mail->Username= "fogodechaochurras@yahoo.com";
    $mail->Password="Crismora40";
   

    //configuração da mensagem
    $mail->setFrom($mail->Username,"Seu Nome"); //remetente
    $mail->addAddress('fogodechaochurras@yahoo.com'); //Destinatario
    $mail->Subject = "Fale Conosco"; //Assunto do E-mail

    $conteudo_email = "
    VocÊ recebeu uma mensagem de $nome ($email): <br><br>

    Mensagem<br>
    $mensagem
    ";

    $mail->isHTML(true);
    $mail->Body = $conteudo_email;

    if ( $mail->send()){
        echo "E-mail enviado com sucesso!";
    }else{
        echo "Falha ao enviar o e-mail:" .$mail->ErrorInfo;
    }
?>

<!DOCTYPE html>
<html lang="e">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        background-color: #f1f1f1f1;
    }
</style>
<body>
    
</body>
</html>