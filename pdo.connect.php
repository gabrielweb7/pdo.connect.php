<?php 
	/**
	*	Arquivo de conexão a banco de dados via PDO
	*	Author: Gabriel Azuaga Barbosa <gabrielbarbosaweb7@gmail.com>
	*	Github: https://github.com/gabrielweb7
	*	Site pessoal: http://gabrieldaluz.com.br
	*	Version: 1.0.3
	*/

	/**
	*	Variaveis Essenciais
	*/
	define("SERVER_NAME", $_SERVER["SERVER_NAME"]);
	define("REQUEST_URI", $_SERVER["REQUEST_URI"]);
	define("SCRIPT_NAME", $_SERVER["SCRIPT_NAME"]);
	
	/**
	*	Verifica se é servidor local ou online
	*/
	if(SERVER_NAME == "localhost" or SERVER_NAME == "127.0.0.1") {
	
		/**
		*	LocalHost
		*/
		define("PDO_HOST", "localhost");
		define("PDO_DBNAME", "databaseNome");
		define("PDO_USER", "Usuario");
		define("PDO_PASS", "Senha");
	
	} else { 
	
		/**
		*	Online
		*/
		define("PDO_HOST", "localhost");
		define("PDO_DBNAME", "databaseNome");
		define("PDO_USER", "Usuario");
		define("PDO_PASS", "Senha");
	
	}
	
	/**
	*	Iniciando Conexão PDO
	*/
	try {
		$pdo = new PDO('mysql:host='.PDO_HOST.';dbname='.PDO_DBNAME, PDO_USER, PDO_PASS);
	} catch (PDOException $e) {    
		print "Error Conexão PDO: " . $e->getMessage() . "<br/>";
		die();
	}
	
?>