
<?php
// Projeto ant f5
//se o campo foi enviado
if(isset($_POST['email'])){

	$email = $_POST['email'];
	// cria um arquivo dentro dele 
	file_put_contents("text.txt",$email, FILE_APPEND);
	//redireciona para mesma pagina apos o f5 clicado
	header("Location: index.php");
}

?>
<link REL="SHORTCUT ICON" HREF="/favicon.ico">
<form method="POST">
	<input type="text" name="email"><br>

	<input type="submit" value="Enviar">

</form>
