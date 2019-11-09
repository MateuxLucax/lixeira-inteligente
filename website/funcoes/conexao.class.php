<?php

class Conexao {
	protected static $conexao;
	
	private function __construct ()	{
    $db_host = "sql174.main-hosting.eu";
    $db_nome = "u629327027_count";
    $db_usuario = "u629327027_mateux";
    $db_senha = "ichbinkomisch";
    $db_driver = "mysql";
  
		try	{
			self::$conexao = new PDO("$db_driver:host=$db_host; dbname=$db_nome", $db_usuario, $db_senha);
			self::$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			self::$conexao->exec("SET NAMES utf8");
		}
		catch (PDOException $e) {
			die("Erro de conexão: ".$e->getMessage());
		}
	}
	
	public static function conexao() {
		if (!isset(self::$conexao)) {
			new self;
		}
		return self::$conexao;
	}

}
?>