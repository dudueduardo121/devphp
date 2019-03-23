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
	
	$sql = "SELECT * FROM usuarios";
	$sql = $pdo->query($sql);

	if($sql->rowCount()>0){ //rowCount cont as linhas tem que ser maior que 0

		
		foreach ($sql->fetchAll() as $usuario) { // fetchAll vai pegar todos os usuarios e trnsforma em uma Array

			echo "Nome:".$usuario["nome_usuario"]." - ".$usuario["senha"]."<br>";
		}
	}else{

		echo "NÃO HÀ USUARIOS CADASTRADOS";
	}



}catch(PDOException $erro){
	echo "Falha: ".$erro->getMessage();
}


?>




