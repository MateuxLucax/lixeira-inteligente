<?php 
  
  $adicionar = isset($_GET["adicionar"]) ? $_GET['adicionar'] : false;
  if ($adicionar == true) { 
    try {
      include_once("../funcoes/conexao.php");
      $pdo = new PDO("$db_driver:host=$db_host; dbname=$db_nome", $db_usuario, $db_senha);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $pdo->exec("SET NAMES utf8");
      date_default_timezone_set('America/Sao_Paulo');
      $data = date("Y-m-d");
      $horario = date("H:i:s");
      $sql = "INSERT INTO `log` VALUES(null, '".$data."','".$horario."')";
      $stmt = $pdo->prepare($sql);
      $stmt->execute();
    } catch(PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }
  }
  $stmt = null;
  $pdo = null;

?>