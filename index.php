<?php

// introdução a criptografia

$nome = "edu";
$nome2 = md5($nome);
$nome3 = base64_encode($nome);

echo "nome original: ".$nome. "</br>";
echo "nome criptografado inrevercivel: ".$nome2. "</br>";
echo "nome criptografado: ".$nome3;


?>




