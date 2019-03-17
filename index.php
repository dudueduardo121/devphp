<?php
// coneção com o banco de dados

$dsn = "mysql:dbname=cadastro;host=localhost";
$dbuser = "root";
$dbpass = "";

try{
	$pdo = new PDO($dsn,$dbuser,$dbpass);
	echo "conectado...";

}catch(PDOException $erro){
	echo "Falha: ".$erro->getMessage();
}


?>




