<?php
    // Criando nossas variáveis para guardar as informações do formulário
    $Nome=$_POST['Nome'];
    $Sobrenome=$_POST['Sobrenome'];
    $email=$_POST['email'];
  
    $date=date("d/m/Y");
    $msg=$_POST['mensagem'];
    // formatando nossa mensagem (que será envaida ao e-mail)

    $mensagem= 'Esta mensagem foi enviada através do formulário<br><br>';
    $mensagem.='<b>Nome: </b>'.$Nome.'<br>';
    $mensagem.='<b>Sobrenome:</b> '.$Sobrenome.'<br>';
    $mensagem.='<b>email:</b> '.$email.'<br>';
  
    $mensagem.='<b>Data de envio:</b> '.$date.'<br>';
    $mensagem.='<b>Mensagem:</b><br> '.$msg;
    // abaixo as requisições do arquivo phpmailer
    require("phpmailer/src/PHPMailer.php");
    require("phpmailer/src/SMTP.php");
    require ("phpmailer/src/Exception.php");

    
?>
