<?php
    // !!! ATENÇÃO !!!
    // Caso for utilizar o email do GMAIL como remetente do email,
    // é necessário ATIVAR a opção "Permitir aplicativos menos seguros".
    
    // Isso apenas habilita a possibilidade de enviar emails de aplicativos/servidores em desenvolvimento (sem segurança HTTPS)
    // Esse exemplo utiliza o pacote PHPMailer para o envio de email, já está parcialmente configurado para a utilização com o GMAIL.
    // Boa sorte no TCC :D

    // Inclui o arquivo class.phpmailer.php localizado na mesma pasta do arquivo php 
    include "PHPMailer/PHPMailerAutoload.php"; 

    // Inicia a classe PHPMailer 
    $mail = new PHPMailer(); 
    
    // Método de envio 
    $mail->IsSMTP(); 
    
    // Enviar por SMTP 
    $mail->Host = "smtp.gmail.com"; 
    
    // Você pode alterar este parametro para o endereço de SMTP do seu provedor 
    $mail->Port = 587; 

    
    // Usar autenticação SMTP (obrigatório) 
    $mail->SMTPAuth = true;
    
    // Usuário do servidor SMTP (endereço de email) 
    // obs: Use a mesma senha da sua conta de email 
    $mail->Username = 'SEU EMAIL DO GMAIL'; 
    $mail->Password = 'SENHA DO GMAIL'; 
    
    // Configurações de compatibilidade para autenticação em TLS 
    // $mail->SMTPOptions = array( 'ssl' => array( 'verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true ) ); 
    
    // Você pode habilitar esta opção caso tenha problemas. Assim pode identificar mensagens de erro. 
    // $mail->SMTPDebug = 2; 
    
    // Define o remetente 
    // Seu e-mail 
    $mail->From = "SEU EMAIL DO GMAIL"; 
    
    // Seu nome 
    $mail->FromName = "NOME DE QUEM ESTÁ ENVIANDO O EMAIL"; 
    
    // Define o(s) destinatário(s) 
    $mail->AddAddress('EMAIL DE QUEM VAI RECEBER', 'NOME DE QUEM VAI RECEBER'); 
    
    // Opcional: mais de um destinatário
    // $mail->AddAddress('fernando@email.com'); 
    
    // Opcionais: CC e BCC
    // $mail->AddCC('joana@provedor.com', 'Joana'); 
    // $mail->AddBCC('roberto@gmail.com', 'Roberto'); 
    
    // Definir se o e-mail é em formato HTML ou texto plano 
    // Formato HTML . Use "false" para enviar em formato texto simples ou "true" para HTML.
    $mail->IsHTML(true); 
    
    // Charset (opcional) 
    $mail->CharSet = 'UTF-8'; 
    
    // Assunto da mensagem 
    $mail->Subject = "Envio de email com o PHPMailer"; 
    
    // Corpo do email 
    $mail->Body = 'Teste email'; 
    
    // Opcional: Anexos 
    // $mail->AddAttachment("/home/usuario/public_html/documento.pdf", "documento.pdf"); 
    
    // Envia o e-mail 
    $enviado = $mail->Send(); 
    
    // Exibe uma mensagem de resultado 
    if ($enviado) 
    { 
        echo "Seu email foi enviado com sucesso!"; 
    } else { 
        echo "Houve um erro enviando o email: ".$mail->ErrorInfo; 
    } 

?>