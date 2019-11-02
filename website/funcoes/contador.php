<?php 

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
        }
      }
    } catch(PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }
    $stmt = null;
    $pdo = null;
    return $quantidade;
  }
 
?>