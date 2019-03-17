
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

<div class="container" style="margin-left: 250px; font-family: sans-serif; width: 200px;height: 200px; background-color: tomato; border-radius: 10px;">
<form method="GET" style="padding: 10px;">
EMAIL:</br>
	<input type="text" name="email"><br><br>
SENHA:</br>
	<input type="password" name="senha"></br></br>
	<input type="submit" value="ENVIAR DADOS">

</form>
</div>