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
// update na tabela do banco
	$new_Senha = md5("1");

	$sql = "UPDATE usuarios SET senha = '$new_Senha' WHERE id = '1211' ";
	$pdo->query($sql);

	echo "usuario atualizado";



}catch(PDOException $erro){
	echo "Falha: ".$erro->getMessage();
}


?>




