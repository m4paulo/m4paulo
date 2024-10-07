<?php

    $nome = addcslashes($_POST['nome']);
    $email = addcslashes($_POST['email']);
    $telefone = addcslashes($_POST['telefone']);
    $msg = addcslashes($_POST['msg']);

    $para = "matheuspaulomp456@gmail.com";
    $assunto = "Coleta de dados - portfolio";

    $corpo = "Nome: ".$nome."\n"."E-mail: ".$email."\n"."Telefone: ".$telefone."\n"."Mensagem: ".$msg;

    $cabeca = "From: m4thspaulo@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

    if(mai($para, $assunto, $corpo, $cabeca)){
        echo("E-mail enviado com sucesso!:");
    }else{
        echo("Houve um erro ao enviar o E-mail!:");
    }

?>