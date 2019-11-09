<?php

  function enviarMensagem($nome, $email, $conteudo) { // Nome, email, assunto e mensagem do remetente
    
    try {
    
      // {{Mensagem}} {{Nome}} {{email}} 
      $mensagem = file_get_contents('modelo-mensagem.html');
      $mensagem = str_replace('{{Mensagem}}', $conteudo, $mensagem);
      $mensagem = str_replace('{{Nome}}', $nome, $mensagem);
      $mensagem = str_replace('{{email}}', $email, $mensagem);

      $destinatario = "contato@lixeirainteligente.com";
      $assunto = "Mensagem via site - Lixeira Inteligente";

      //  Cabeçalho
      $cabecalho = "MIME-Version: 1.0" . "\r\n";
      $cabecalho .= "Content-type:text/html;charset=UTF-8" . "\r\n";
      $cabecalho .= 'From: '. $nome. ' <'. $email. '>' . "\r\n";
      $cabecalho .= "Reply-To: ". $email. "\r\n";
      
      mail($destinatario, $assunto, $mensagem, $cabecalho);
      echo 'true';

    } catch (Exception $e) {
      echo 'false';
    }

  }

  $nome = isset($_GET['nome']) ? $_GET['nome'] : false;
  $email = isset($_GET['email']) ? $_GET['email'] : false;
  $conteudo = isset($_GET['conteudo']) ? $_GET['conteudo'] : false;

  if ($nome != false && $email != false && $conteudo != false) {
    enviarMensagem($nome, $email, $conteudo);
  } else {
    echo 'false';
  }

?>