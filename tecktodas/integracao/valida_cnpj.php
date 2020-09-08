<?php

$cnpj = '82.330.409/000140';

$cnpj = preg_replace('/[^0-9]/', '', (string) $cnpj);
	
	// Lista de CNPJs inválidos
	$invalidos = [
		'00000000000000',
		'11111111111111',
		'22222222222222',
		'33333333333333',
		'44444444444444',
		'55555555555555',
		'66666666666666',
		'77777777777777',
		'88888888888888',
		'99999999999999'
	];
	
	// Verifica se o CNPJ está na lista de inválidos
	if (in_array($cnpj, $invalidos)) {	
		$response['cnpj'] = 'CNPF incorreto';
		echo json_encode($response);
		exit;
	}
	// Valida tamanho
	if (strlen($cnpj) != 14){
		$response['cnpj'] = 'CNPF incorreto';
		echo json_encode($response);
		exit;
	}
	// Verifica se todos os digitos são iguais
	if (preg_match('/(\d)\1{13}/', $cnpj)){
		$response['cnpj'] = 'CNPF incorreto';
		echo json_encode($response);
		exit;
	}
	// Valida primeiro dígito verificador
	for ($i = 0, $j = 5, $soma = 0; $i < 12; $i++)
	{
		$soma += $cnpj[$i] * $j;
		$j = ($j == 2) ? 9 : $j - 1;
	}

	$resto = $soma % 11;

	if ($cnpj[12] != ($resto < 2 ? 0 : 11 - $resto)){
		$response['cnpj'] = 'CNPF incorreto';
		echo json_encode($response);
		exit;
	}

	// Valida segundo dígito verificador
	for ($i = 0, $j = 6, $soma = 0; $i < 13; $i++)
	{
		$soma += $cnpj[$i] * $j;
		$j = ($j == 2) ? 9 : $j - 1;
	}

	$resto = $soma % 11;

	 $a=  $cnpj[13] == ($resto < 2 ? 0 : 11 - $resto);
	echo $a;