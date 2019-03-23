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
//bindValue para não usar variaveis dentro da query
	$nome = 'Pedro';
	$id = 12;

	$sql = "UPDATE usuarios SET nome_usuario = :nome WHERE id=:id";

	$sql = $pdo->prepare($sql);
	$sql->bindValue(':nome',$nome);
	$sql->bindValue(':id',$id);
	$sql->execute();

	echo "usuario atualizado";

}catch(PDOException $erro){
	echo "Falha: ".$erro->getMessage();
}


?>




