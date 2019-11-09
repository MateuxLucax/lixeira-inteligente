<?php 
  
  $adicionar = isset($_GET["adicionar"]) ? $_GET['adicionar'] : false;
  
  if ($adicionar == true) { 
    try {
      include_once("../funcoes/conexao.class.php");
      $pdo = Conexao::conexao();
      $data = date("Y-m-d");
      $horario = date("H:i:s");
      $sql = "INSERT INTO `log` VALUES(null, '".$data."','".$horario."')";
      $stmt = $pdo->prepare($sql);
      $stmt->execute();
      $stmt = null;
      $pdo = null;
    } catch(PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }
  }

?>