# Website Siloé Empreiteira
Landing Page para cliente Siloé Empreiteira.

- [Páginas](#Paginas)
- [Envio de Email](#EnvioEmail)
## Paginas
Início: ......
Sobre nós: ......
Serviços: ......
Projetos: ......
Contato: ......

## EnvioEmail
Para efetuar o envio de e-mail, necessário fazer algumas configurações dentro do arquivo config/Define.php

Dentro de `function EnviarEmail( $origem, $nomeOrigem, $destino, $assunto, $mensagem ){}`
Faça as configurações desejadas
`  
  $mail = new PHPMailer(true);

  /** Definição para envio via SMTP */
  $mail->isSMTP();
  $mail->setLanguage("br", "./venddor/phpmailer/language/");
  $mail->CharSet = "utf-8";
  $mail->isHTML(true);


  /** usando o e-mail de contato */
  $mail->Host = "";
  $mail->Port = 587; 
  $mail->SMTPSecure = "";
  $mail->SMTPDebug = 1;
  $mail->SMTPAuth = true;
  $mail->Username = "";
  $mail->Password = "";
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

`