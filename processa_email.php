<?php
    require "validador.php";
	require "PHPMailer/Exception.php";
	require "PHPMailer/OAuth.php";
	require "PHPMailer/PHPMailer.php";
	require "PHPMailer/POP3.php";
	require "PHPMailer/SMTP.php";

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
    if ($enviado == 1) {
        header('Location: email_enviado.html');
    } 
    if ($enviado == 0) {
        header('Location: index.html?ErroNoEnvio');
    }   
    

	class Mensagem {
        private $para = null;

        public function __get($atributo){
            $this->$atributo;
        }

        public function __set($atributo,$valor){
            $this->$atributo = $valor;
        }
       
        function vazio(){
            if (empty($this->para)){
                $enviado = 0;
            }
        }
    }

    $mensagem = new Mensagem();
    $mensagem->__set('para',$_POST['email']);
    print_r($mensagem);
    $mensagem->vazio();
    
    

   

	$mail = new PHPMailer(true);
	try {
			//Server settings
			$mail->SMTPDebug = 2;                   //Enable verbose debug output
			$mail->isSMTP();                                            //Send using SMTP
			$mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
			$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
			$mail->Username   = 'caiodiscordone@gmail.com';             //SMTP username
			$mail->Password   = 'wzhcrgnproudvvjo';                               //SMTP password
			$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
			$mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

			//Recipients
			$mail->setFrom('caiodiscordone@gmail.com', 'Yinv Co');
			$mail->addAddress($_POST['email']);     //Add a recipient
			/*$mail->addReplyTo('caiodiscordone@gmail.com', 'Yinv Co');
			$mail->addCC('cc@example.com');
			$mail->addBCC('bcc@example.com'); */

			//Attachments
			/*$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
			$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name*/

			//Content
			$mail->isHTML(true);                                  //Set email format to HTML
			$mail->Subject = 'Obrigado por testar o site da Yinv Co!';
			$mail->Body    = '<div style="color: #2679ff;"><h1>Yinv Co.</h1></div> <br><br>
            <div><h3>Site criado com propósito de ampliar conhecimentos e práticar!</h3></div><br>
            <div style="color: #2679ff;"><h5>Made By <a href="https://github.com/CaioSouzaC1">Caio César</a></h5></div>';
			$mail->AltBody = 'Utilize um aplicativo de emails mais atualizado para ler todo o conteúdo enviado pela Yinv Co!';

			$mail->send();
			echo 'Email enviado com sucesso!';
            $enviado = 1;
	} catch (Exception $e) {
             $enviado = 0;
			echo "Não foi possivel enviar este e-mail! <br>";
			echo 'Detalhes do erro: ' . $mail->ErrorInfo;
	}
    
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Yinv Corretora de Investimentos, Invista de forma inteligente!">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="estilo2.css">
    <link rel="icon" type="image/x-icon" href="logofav.png">
    <title>Yinv Co.</title>
  </head>
  <body>
  </body>