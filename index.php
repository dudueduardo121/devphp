
<?php
// verificção senha formulario php
if(isset($_GET['email']) && !empty($__GET['email']))
{
	If(isset($__GET['senha']) && !empty($__GET['senha']))
	{

		
		$email = $__GET['email'];
		$senha = $__GET['senha'];

		echo "Meu email é:".$email."</b> é minha senha e: ".$senha;
	}	
} 
?>

<form method="GET">
EMAIL:</br>
	<input type="text" name="email"><br><br>
SENHA:</br>
	<input type="password" name="senha"></br></br>
	<input type="submit" value="ENVIAR DADOS">

</form>