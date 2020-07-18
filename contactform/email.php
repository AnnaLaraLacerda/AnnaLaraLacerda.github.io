<?php

    if(isset($_POST['email']) && !empty($_POST['email'])){


    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $assunto = addslashes($_POST['assunto']);
    $mensagem = addslashes($_POST['mensagem']);
    
  

    $to = "manancialsup@hotmail.com";
    $subject = "Contato site - $nome";
    $body = "Nome: ".$nome."\r\n".
            "Email: ".$email."\r\n".
            "Assunto: ".$assunto."\r\n".
            "Mensagem: ".$mensagem."\r\n".
          
            $header = "From:matheusbrunoalmeida@gmail.com"."\r\n".
                      "Reply-To:".$email."\e\n".
                      "X-Mailer:PHP/".phpversion();


}
?>