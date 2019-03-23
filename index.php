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
// inserindo dados na tabela 
	$id = "012";
	$nome_usuario ="Fabiola";
	$senha = md5("4321");

	
	$sql = "INSERT INTO usuarios SET id = '$id',nome_usuario='$nome_usuario',senha='$senha' ";

	$sql = $pdo->query($sql);
	//pega o ultimo id inserido lastInsertId
	echo "usuario inserido:".$pdo->lastInsertId();


}catch(PDOException $erro){
	echo "Falha: ".$erro->getMessage();
}


?>




