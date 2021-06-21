<html>
    <head>
        <title>PHP Reading from a file</title>
    </head>
<body>
    <h1>Output</h1>

<?php
	// receber os dados dos inputs do login
	$nome = $_POST["ch_nome"];
	$sobrenome = $_POST["ch_sobrenome"];
	$senha = $_POST["ch_senha"];
	$idade = $_POST["ch_idade"];
	$cidade = $_POST["ch_cidade"];

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
</body>
</html>