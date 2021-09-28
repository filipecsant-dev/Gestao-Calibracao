<?php
//CONSTANTES
$teste = false;
if($teste === false){
	define('HOST', 'localhost');
	define('USUARIO', 'root');
	define('DB', 'calibracao');
	define('SENHA', '');
} else {
	define('HOST', 'sql208.epizy.com');
	define('USUARIO', 'epiz_28837384');
	define('DB', 'epiz_28837384_calibracao');
	define('SENHA', 'N5HZTVCFonVok');
}

//CONEXÃO
function conectar(){
	$dns = "mysql:host=".HOST.";dbname=".DB;



	try{

		$conn = new PDO($dns, USUARIO, SENHA, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")); // SOLUÇÃO 3 CARACTERES -> array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $conn;

	}catch(PDOException $e) {
		//echo $erro->getMessage();
		return false;
	}
}
?>