<?php

// gerar uma session

	session_start();
	$_SESSION["teste"] = "Eduardo";

	echo "sessão realizada";

	echo "Meu nome é: ".$_SESSION["teste"];


// gerar um cookie
	setcookie("meuteste", "fulano", time()+3600);

	echo "cookie setado com sucesso";

	echo "meu cookie é de:".$_COOKIE["meuteste"];


?>




