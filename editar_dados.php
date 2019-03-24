<?php
require 'conexao_banco.php';

$id = 0;

if (isset($_GET['id']) && empty($_GET['id']) ==false) {
	$id = addslashes($_GET['id']);

	$sql = "SELECT * FROM usuarios WHERE id ='$id'";
	$sql = $pdo->query($sql);

	if ($sql->rowCount() > 0) {
		$dado = $sql->fetch();
	}else{
		header("Location:index.php");
	}

	header("Location: index.php");
?>
<form method="POST">
	Id:<br/>
	<input type="text" name="id"  /><br/>
	Nome:<br/>
	<input type="text" name="nome" value="<?php echo $dado['nome_usuario'];?>"/><br/>
	Senha:<br/>
	<input type="password" name="senha"/><br/>

	<input type="submit" value="Atualizar"/>
</form>