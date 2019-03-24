<?php
require 'conexao_banco.php';

if (isset($_POST['nome']) && empty($_POST['nome'])== false) {
	$nome = addslashes($_POST['nome']);
	$senha = md5(addslashes($_POST['senha']));

	$sql = "INSERT INTO usuarios SET nome_usuario ='$nome',senha = '$senha'";
	$pdo->query($sql);

	header("Location: index.php");
}
?>
<form method="POST">
	
	Nome:<br/>
	<input type="text" name="nome"/><br/>
	Senha:<br/>
	<input type="password" name="senha"/><br/>

	<input type="submit" value="cadastrar"/>
</form>