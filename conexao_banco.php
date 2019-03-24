<?php
/*
// coneção com o banco de dados
$mysqli_connection = new MySQLi('localhost','root','','cadastro');

if($mysqli_connection->connect_error){
	echo "Desconectado! Erro:" .$mysqli_connection->connect_error;
}else{
	echo "Conectado!";
}
*/

 //CONEXÃO VIA PDO.

$dsn = "mysql:dbname=cadastro;host=localhost";
$dbusuario = "root";
$dbpassword = "";

try{
	$pdo = new PDO($dsn,$dbusuario,$dbpassword);
	

}catch(PDOException $erro){
	echo "Falha de conexão: ".$erro->getMessage();
}
?>