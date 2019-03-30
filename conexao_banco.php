<?php
/*
// coneção com o banco de dados
$mysqli_connection = new MySQLi('localhost','root','','cadastro');

if($mysqli_connection->connect_error){
	echo "Desconectado! Erro:" .$mysqli_connection->connect_error;
}else{
	echo "Conectado!";
}


 //CONEXÃO VIA PDO.

$dsn = "mysql:dbname=cadastro;host=localhost";
$dbusuario = "root";
$dbpassword = "";

try{
	$pdo = new PDO($dsn,$dbusuario,$dbpassword);

	$sql = $pdo->query("SELECT * FROM user WHERE email = '$email', senha= '$senha'");

	if($sql->rowCount() > 0){
		$dado =$sql->fetch();

		print_r($dado);
	}

	

}catch(PDOException $erro){
	echo "Falha de conexão: ".$erro->getMessage();
}
?>