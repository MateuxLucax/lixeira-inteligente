<?php 

  $contar = isset($_GET['contar']) ? $_GET['contar'] : '';

  function contador() {
    try {
      include_once("conexao.class.php");
      $pdo = Conexao::conexao();
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
