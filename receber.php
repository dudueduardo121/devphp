<?php
extract($_POST);

 $nome = array("nome" =>$nome, "email" =>$email, "data" =>$data, "cargo" =>$cargo);

foreach($nome as $candidato) {
	echo $candidato. "<br>";
} 

?>