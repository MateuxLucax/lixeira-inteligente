<?php 

  $contar = isset($_GET['contar']) ? $_GET['contar'] : '';

  function contador() {
    try {
      include_once("conexao.php");
      $pdo = new PDO("$db_driver:host=$db_host; dbname=$db_nome", $db_usuario, $db_senha);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $pdo->exec("SET NAMES utf8");
      $sql = "SELECT `quantidade` FROM `contador` WHERE id = 1";
      $stmt = $pdo->prepare($sql);
      $stmt->execute();
      $resultado = $stmt->fetchAll();
      if (count($resultado)) { 
        foreach($resultado as $linha) {
          $quantidade = $linha[0]; 
          $stmt = null; 
          $pdo = null;
          return '<h2 class="contador-numeros fadeIn">'. $quantidade. '</h2>';
        }
      }
    } catch(PDOException $e) {
        return '<p class="mensagem-de-erro">Erro ao tentar realizar a contagem :(</p>';
    }
  }
 
  if ($contar == true) {
    echo contador();
  }

?>