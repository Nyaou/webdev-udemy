<?php 
	
	
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;


	//print_r($_POST);

	class Mensagem{
		private $para = null;
		private $assunto = null;
		private $mensagem = null;
		public $status = array('codigo_status' => null, 'descricao_status' => '') ;
		public function __get($atributo){
			return $this->$atributo;
		}

		public function __set($atributo, $valor){
			$this->$atributo = $valor;
		}

		public function __mensagemValida(){
			if(empty($this->para) || empty($this->assunto) || empty($this->mensagem)){
				return false;
			}

			return true;
		}
	}

	$mensagem = new Mensagem();

	$mensagem->__set('para', $_POST['para']);
	$mensagem->__set('assunto', $_POST['assunto']);
	$mensagem->__set('mensagem', $_POST['mensagem']);

	if(!$mensagem->__mensagemValida()){
		echo "Mesangem não é válida";
		header('Location: index.php?erro=1');
	}

	$mail = new PHPMailer(true);

	try {
	    //Server settings
	    $mail->SMTPDebug = false;                      //Enable verbose debug output SMTP::DEBUG_SERVER
	    $mail->isSMTP();                                            //Send using SMTP
	    $mail->Host       = 'smtp.host.com';                     //Set the SMTP server to send through
	    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
	    $mail->Username   = 'teste@teste.com';                     //SMTP username
	    $mail->Password   = 'password';                               //SMTP password
	    $mail->SMTPSecure = 'tsl';         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
	    $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

	    //Recipients
	    $mail->setFrom('teste@teste.com', 'teste');
	    $mail->addAddress($mensagem->__get('para'));     //Add a recipient
	    //$mail->addAddress('ellen@example.com');               //Name is optional
	    //$mail->addReplyTo('info@example.com', 'Information');
	    //$mail->addCC('cc@example.com');
	    //$mail->addBCC('bcc@example.com');

	    //Attachments
	    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
	    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

	    //Content
	    $mail->isHTML(true);                                  //Set email format to HTML
	    $mail->Subject = $mensagem->__get('assunto');
	    $mail->Body    = $mensagem->__get('mensagem');
	    $mail->AltBody = 'é necessário o suporte a tags html para este serviço';

	    $mail->send();
	    $mensagem->status['codigo_status'] = 1;
	    $mensagem->status['descricao_status'] = 'E-mail enviado com sucesso!';
	} catch (Exception $e) {
		$mensagem->status['codigo_status'] = 2;
	    $mensagem->status['descricao_status'] = 'Não foi possivel enviar este E-mail';
	}


?>

<html>
	<head>
		<meta charset="utf-8" />
    	<title>App Mail Send</title>

    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	</head>

	<body>

		<div class="container">  

			<div class="py-3 text-center">
				<img class="d-block mx-auto mb-2" src="logo.png" alt="" width="72" height="72">
				<h2>Send Mail</h2>
				<p class="lead">Seu app de envio de e-mails particular!</p>
			</div>

			<div class="row">
				<div class="col-md-12">

					<?php if($mensagem->status['codigo_status'] == 1){ ?>

						<div class="container">
							<h1 class="display-4 text-sucess">Sucesso</h1>
							<p><?= $mensagem->status['descricao_status']; ?></p>
							<a href="index.php" class="btn btn-success btn-lg mt-5 text-white">Voltar</a>
						</div>

					<?php } ?>

					<?php if($mensagem->status['codigo_status'] == 2){ ?>

						<div class="container">
							<h1 class="display-4 text-danger">Ops!</h1>
							<p><?= $mensagem->status['descricao_status']; ?></p>
							<a href="index.php" class="btn btn-success btn-lg mt-5 text-white">Voltar</a>
						</div>

					<?php } ?>
					
				</div>
				
			</div>

		</div>
	</body>
</html>