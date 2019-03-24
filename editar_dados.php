<?php
require 'conexao_banco.php';

$id = 0;
if(isset($_GET['id']) && empty($_GET['id']) == false) {
	$id = addslashes($_GET['id']);
}

if(isset($_POST['nome']) && empty($_POST['nome']) == false) {
	$nome = addslashes($_POST['nome']);
	$senha =addslashes($_POST['senha']);

	$sql = "UPDATE usuarios SET nome_usuario = '$nome', senha = '$senha' WHERE id ='$id'";
	$pdo->query($sql);

	header("Location: index.php");
}

$sql = "SELECT * FROM usuarios WHERE id = '$id'";
$sql = $pdo->query($sql);
if($sql->rowCount() > 0) {

	$dado = $sql->fetch();

} else {
	header("Location: index.php");
}
?>
<form method="POST">
	Nome:<br/>
	<input type="text" name="nome" value="<?php echo $dado['nome_usuario']?>"/><br/>
	Senha:<br/>
	<input type="password" name="senha" value="<?php echo $dado['senha']?>"/><br/>

	<input type="submit" value="cadastrar"/>
</form>