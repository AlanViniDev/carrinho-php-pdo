<?php
// conexao com o banco de dados
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DBNAME', 'sistema');
define('PORT', '');

class conexao {
	public $conexao;
	function conecta (){
		try
		{
			$this->conexao = new pdo('mysql:host=' . HOST . ';port=' . PORT . ';dbname=' . DBNAME, USER, PASS);
			//echo "Conexão com banco de dados realizada com sucesso.";
		}
		catch (PDOException $e)
		{
			echo "Erro: Conexão com banco de dados não foi realizada com sucesso. Erro gerado " . $e->getMessage();
		}
	}
}
