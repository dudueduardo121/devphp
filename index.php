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
$dbuser = "root";
$dbpass = "";

try{
	$pdo = new PDO($dsn,$dbuser,$dbpass);
// Excluir dados do banco

	$sql= "DELETE FROM usuarios WHERE id = 11";

	$pdo->query($sql);

	echo "usuario deletado";
	



}catch(PDOException $erro){
	echo "Falha: ".$erro->getMessage();
}


?>




