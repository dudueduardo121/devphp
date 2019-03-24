<?php
require 'conexao_banco.php';
?>
<a href="incluir_novo.php">Novo usuario</a>
<table width="100%">
	<tr>
		<th>id</th>
		<th>nome</th>
		<th>Ações</th>
	</tr>
	<?php
	$sql = "SELECT * FROM usuarios";
	$sql = $pdo->query($sql);

	if($sql->rowCount() > 0){
		foreach ($sql->fetchALL() as $usuario) {
			echo '<tr>';
			echo '<td>'.$usuario['id'].'</td>';
			echo '<td>'.$usuario['nome_usuario'].'</td>';
			echo '<td><a href="editar_dados.php?id='.$usuario['id'].'">Editar</a> - <a href="excluir_dados.php?id='.$usuario['id'].'">Excluir</a></td>';
			echo '</tr>';

		}
	}
	?>
	
</table>



