<?php
  $SiteName = "Siloé Empreiteira";
  $SiteAuthor = "Agência N2Y";
  $SiteDescription = "Construir e Reformar é com a Siloé Emprenteira";
  $ConteudoLinkWhatsApp = "https://api.whatsapp.com/send?phone=5511930007773";
  $ConteudoLinkWhatsApp .= "&text=Oi%20Alex,%20estou%20vindo%20atrav%C3%A9s%20do%20seu%20site%20e";
  $ConteudoLinkWhatsApp .= "%20gostaria%20de%20saber%20mais%20sobre%20os%20servi%C3%A7os%20da%20Silo%C3%A9%20Empreiteira.";
  $ConteudoLinkEmail = "mailto::alex@siloeempreiteira.com.br";


  /** Enviar Email */
  function EnviarEmail( $origem, $nomeOrigem, $destino, $assunto, $mensagem ){
    require_once './vendor/phpmailer/class.phpmailer.php';
    require_once './vendor/phpmailer/class.smtp.php';

    $mail = new PHPMailer(true);

    /** Definição para envio via SMTP */
    $mail->isSMTP();
    $mail->setLanguage('br', './venddor/phpmailer/language/');
    $mail->CharSet = 'utf-8';
    $mail->isHTML(true);


    /** usando o e-mail de contato */
    $mail->Host = '';
    $mail->Port = 587;
    $mail->SMTPSecure = '';
    $mail->SMTPDebug = 1;
    $mail->SMTPAuth = true;
    $mail->Username = '';
    $mail->Password = '';
    $mail->From = $origem;
    $mail->FromName = $nomeOrigem;
    $mail->Subject = $assunto;
    $mail->addAddress($destino);
    $mail->msgHTML($mensagem);
    if( !$mail->Send() ){
      return "Erro ao enviar o contato, tente novamente mais tarde.";
    }else{
      return "Ok";
    }

  }