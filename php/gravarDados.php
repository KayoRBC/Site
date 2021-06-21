<?php
	// receber os dados dos inputs do login
	$nome = $_GET["ch_nome"];
	$sobrenome = $_GET["ch_sobrenome"];
	$senha = $_GET["ch_senha"];
	$idade = $_GET["ch_idade"];
	$cidade = $_GET["ch_cidade"];

	$texto = file_get_contents("../musica.txt");

	$usuario = $texto[6] . $texto[3] . $texto[6] . $texto[3] . $texto[65] . $texto[16];

	// verificar se os inputs correspondem ao cadastro
	// caso os inputs correspondam ao cadastro, retorna "Cadastrado"
	if($nome == $usuario && $sobrenome == "cabeludo" && $senha == "202cb962ac59075b964b07152d234b70" && $idade == "69" && $cidade == "felpslandia"){
		$retorno = utf8_encode("Cadastrado");
		$json = json_encode($retorno);
		echo $json;
	}
	// caso os inputs não correspondam ao cadastro, retorna "Não cadastrado"
	else{
		$retorno = utf8_encode("Nao cadastrado");
		$json = json_encode("$retorno");
		echo $json;
	}
?>