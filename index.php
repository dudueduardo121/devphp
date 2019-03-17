
<?php
// Mutiplos arquivos em php require ou include para mesma pagina tirando o action ="receber.php"
require "receber.php";

?>

<form method="POST" action="receber.php">
	Emai:</br>
	<input type="text" name="email"/><br>

	<input type="submit" value="Enviar dados"/>
</form>