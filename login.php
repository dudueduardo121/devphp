<?php

session_start();
if(isset($_POST['email']) && empty($_POST)==false){
	$email = addslashes($_POST['email']);
	$senha = md5(addslashes($_POST['senha']));

	$dsn = "mysql:dbname=cadastro;host=localhost";
	$dbusuario = "root";
	$dbpassword = "";

try{
	$pdo = new PDO($dsn,$dbusuario,$dbpassword);

	$sql = $pdo->query("SELECT * FROM user WHERE email ='$email' and senha = '$senha'");

	if($sql->rowCount() > 0){
		
		$dado =$sql->fetch();

		$_SESSION['id'] = $dado['id'];

		header("Location: index.php");
	}

	

	}catch(PDOException $erro){
		echo "Falha de conexão: ".$erro->getMessage();
	}
}

?>
<form method="POST">
	Email:<br/>
	<input type="text" name="email"/><br/><br/>
	Senha:<br/>
	<input type="password" name="senha"/><br/><br/>

	<input type="submit" value="Entrar"/>
</form>