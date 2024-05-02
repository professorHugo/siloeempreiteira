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

/** Definição para envio via SMTP */
`$mail->isSMTP();  
$mail->setLanguage("br", "./venddor/phpmailer/language/");  
$mail->CharSet = "utf-8";  
$mail->isHTML(true);  
`
  
`/** usando o e-mail de contato */`  
Servidor: `$mail->Host = "";`  
Porta: `$mail->Port = 587;`  
Se necessário adicione: `$mail->SMTPSecure = "";`  
Para geração de log: `$mail->SMTPDebug = 1;`  
Se o e-mail requer autenticação: `$mail->SMTPAuth = true;` // A maioria precisa  
Usuário no provedor: `$mail->Username = "";`  
Senha no provedor: `$mail->Password = "";`  
Origem será o que foi definido no parametro da função: `$mail->From = $origem;`  
Nome será o que foi definido no parametro da função: `$mail->FromName = $nomeOrigem;`  
Assunto será o que foi definido no parametro da função: `$mail->Subject = $assunto;`  
Destino será o que foi definido no parametro da função: `$mail->addAddress($destino);`  
Mensagem será o que foi definido no parametro da função:`$mail->msgHTML($mensagem);`  
A função em seguinda executa o envio e oferece um return  
`if(!$mail->Send()){ return "Erro ao enviar o contato, tente novamente mais tarde."; }else{ return "Ok"; }`  