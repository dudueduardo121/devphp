<?php 
	$arq = $_FILES['arquivo'];
	//verifica se houve um arquivo que foi enviado
	if(isset($arq['tmp_name']) && !empty($arq['tmp_name'])) {
		//função para salvar imagens com cod diferentes
		$nomearquivo = md5(time().rand(0,99)).'.png';
		move_uploaded_file($arq['tmp_name'], 'arquivos/'.$nomearquivo);
		echo "Arquivo enviado com sucesso";
	}
?>