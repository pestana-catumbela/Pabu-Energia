<?php
    use PHPMailer\PHPMailer\PHPMailer;
    require './vendor/autoload.php';
        $mail = new PHPMailer;
        $mail->CharSet = "UTF-8";
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 587;
        $mail->SMTPAuth = true;
        $mail->Username = 'pacaembu@pacaembuautopecas.com.br';
        $mail->Password = 'P@BUo500MBB';
        $mail->SMTPSecure = 'tls';
        $mail->setFrom('pacaembu@pacaembuautopecas.com.br', 'Contato Pabu Energia');
        $mail->addAddress('contato@pabuenergia.com.br');
        if ($mail->addReplyTo($_POST['email'] ?? null, $_POST['name'] ?? null)) {
            $mail->Subject = $_POST['subject'] ?? null;
            $mail->isHTML(false);
            $mail->Body = <<<EOT
    Nome: {$_POST['name']}
    Email: {$_POST['email']}
    Empresa: {$_POST['company']}
    Cargo: {$_POST['function']}
    Telefone: {$_POST['telephone']}
    Mensagem: {$_POST['message']}
    EOT;
            if (!$mail->send()) {
                $msg = 'Opa! tivemos um problema no nosso servidor 🥲';
            } else {
                $msg = 'Email enviado com sucesso 🥳';
            }
        } else {
            $msg = 'Share it with us!';
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Email enviado</title>
</head>
<body style="background-color: #ECF0F1; color: #00144A; font-family: 'Montserrat', sans-serif;">
    <?php if (!empty($msg)) {
        echo "<h2>$msg</h2>";
    } ?>
</body>
</html>
