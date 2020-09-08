<?php
/*echo md5("token_ativo_TeckTodas");
exit;*/
//integracao app
//tipo de retornos
header('Access-Control-Allow-Origin:*');
    header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
    header('Access-Control-Allow-Headers: * ');
    header('Access-Control-Max-Age: 1728000');

    
/*header("Access-Control-Allow-Credentials", true);
header("Access-Control-Allow-Methods", "GET,PUT,POST");*/
header('Content-type: application/json');
//tipo de requisição aceita
if($_SERVER['REQUEST_METHOD'] == 'POST'){
$response = array();
//TOKEN PARA VALIDAÇÃO DA OPERAÇÃO
	$api_token_guardada = md5("token_ativo_TeckTodas");
	
	$api_token 	= $_POST['api_token'];
	$cnpj		= addslashes(utf8_decode($_POST['cnpj']));
	$razao_social		= addslashes(utf8_decode($_POST['razao_social']));
	$representante		= addslashes(utf8_decode($_POST['representante']));
	$telefone			= $_POST['telefone'];
	$email				= addslashes(utf8_decode($_POST['email']));
	$estado				= addslashes(utf8_decode($_POST['estado']));
	$cidade				= addslashes(utf8_decode($_POST['cidade']));
	$cep				= addslashes($_POST['cep']);
	$numero_mulheres	= addslashes(utf8_decode($_POST['numero_mulheres']));
	$descricao_ambiente	= addslashes(utf8_decode($_POST['descricao_ambiente']));
	$dif_salarial		= addslashes(utf8_decode($_POST['dif_salarial']));
	$aceita_trans		= addslashes(utf8_decode($_POST['aceita_trans']));
	
	$sen		= addslashes(utf8_decode($_POST['senha']));
	
	//tratar email
	if(!filter_var($email, FILTER_VALIDATE_EMAIL))
	{
		$response['error'] = 'E-mail incorreto';
		echo json_encode($response);
		exit;
	}
	
	//tratar o cnpj
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
	if($a==0){
		$response['cnpj'] = 'CNPF incorreto';
		echo json_encode($response);
		exit;
	}
//conexao banco
			include_once("php/conn.php");
	$sql_busca = ("SELECT * FROM `cad_empresa` 
			WHERE cnpj='".$cnpj."' AND
			status_empresa !='I';");
			$query_busca= mysql_query($sql_busca);
			$num_busca = mysql_num_rows($query_busca);
			
	if($num_busca<1){
				
  
		if ($api_token== $api_token_guardada) { 
		
		//if($api_token == "token_ativo"){
			
			// DEFINE O FUSO HORARIO COMO O HORARIO DE BRASILIA
		date_default_timezone_set('America/Sao_Paulo');
			$hoje = date('Y-m-d');
			//busca no banco 
			$datetime = date('Y-m-d H:i:s');
			$sql = ("INSERT INTO `cad_empresa` 
			(`razao_social`, 
			`cnpj`, 
			`senha`, 
			`representante`, 
			`telefone`, 
			`email`, 
			`estado`, 
			`cidade`, 
			`cep`, 
			`numero_mulheres`, 
			`descricao_ambiente`, 
			`dif_salarial`, 
			`aceita_trans`, 
			`data_cad`, 
			`status_empresa`, 
			`quem_validou`,
			 `ultima_atualizacao`) 
			 VALUES ('".$razao_social."', 
			 '".$cnpj."', 
			 '".$sen."', 
			 '".$representante."', 
			 '".$telefone."', 
			 '".$email."', 
			 '".$estado."', 
			 '".$cidade."', 
			 '".$cep."', 
			 '".$numero_mulheres."', 
			 '".$descricao_ambiente."', 
			 '".$dif_salarial."', 
			 '".$aceita_trans."', 
			 '".$hoje."', 
			 '', 
			 '".$quem."', 
			 '".$hoje."');");
			$sql_cadastro = mysql_query($sql);
			if($sql_cadastro){
				$response['cadastro'] =  'sucesso';
				//retorno sucesso
				echo json_encode($response);
			}else{
				$response['cadastro'] =  'falha';
				//retorno sucesso
				echo json_encode($response);
			}
	 
	
		}else{
			$response['auth_token'] =  false;
			echo json_encode($response);
		}
	}//fim if cadastro ja existe
	else{
		$response['cadastro'] = 'CNPJ Já cadastrado';
		echo json_encode($response);
	}
	}
	else{
	$response['token'] = 'falha no token';
	$response['method'] = 'falha no metodo';
	echo json_encode($response);
}
?>