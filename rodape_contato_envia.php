<?php

    $nome = $_POST['nome_contato'];
    $email = $_POST['email_contato'];
    $comentario = $_POST['comentario_contato'];

    require 'PHPMailer/php-mailer/PHPMailerAutoload.php';

    $mail = new PHPMailer();
    $mail->isSMTP();

    // Configurações do servidor de email
    $mail->Host = 'smtp.office365.com';
    $mail->Port = '587';
    $mail->SMTPSecure = 'STARTTLS';
    $mail->SMTPAuth = 'true';
    $mail->Username = 'chufogodechao@outlook.com';
    $mail->Password = 'Crismora40';

    // Configuração de mensagem
    $mail->setFrom($mail->Username, "Alerta fogo de chao"); // remetente(sistema)
    $mail->addAddress($mail->Username);                

    $mail->Subject = "Sua mensagem foi enviada com sucesso!!";

    $conteudo_email = "
    Voce recebeu uma mensagem de $nome ($email):
    <br>
    Mensagem: <br>
    $comentario
    ";
    $mail->IsHTML(true);
    $mail->Body = $conteudo_email;

    if ($mail->send())
    {
        echo "E-mail enviado com sucesso!";
    }
    else
    {
        echo "Falha ao enviar o e-mail " . $mail->ErrorInfo;
    }

    if($mail->send()){
        header('location: index.php');
}

?>