<?php
require 'conexao_banco.php';

if (isset($_POST['nome']) && empty($_POST['nome'])== false) {
	$nome = addslashes($_POST['nome']);
	$email = addslashes($_POST['email']);
	$senha = md5(addslashes($_POST['senha']));

	$sql = "INSERT INTO usuarios SET id = '$id',nome_usuario ='$nome', senha = '$senha'";
	$pdo->query($sql);

	header("Location: index.php");
}
?>
<form method="POST">
	Id:<br/>
	<input type="text" name="id"/><br/>
	Nome:<br/>
	<input type="text" name="nome"/><br/>
	Senha:<br/>
	<input type="password" name="senha"/><br/>

	<input type="submit" value="cadastrar"/>
</form>