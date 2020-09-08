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
	$cpf 		= $_POST['cpf'];
	$sen		= $_POST['senha'];
	
  
	if ($api_token== $api_token_guardada) { 
	
	//if($api_token == "token_ativo"){
		//conexao banco
		include_once("php/conn.php");
		
		//busca no banco 
		$datetime = date('Y-m-d H:i:s');
		$sql = ("SELECT * FROM `cad_mulher` 
		WHERE cpf='".$cpf."' and senha = '".$sen."' AND
		status !='I';");
		$sql_logar = mysql_query($sql);
		$num_retorno = mysql_num_rows($sql_logar);
		if($num_retorno>0){
			//array com os retornos
			$dados = mysql_fetch_array ($sql_logar);
			$id_cad 			= $dados["id_cad"];
			$nome				= utf8_encode($dados['nome']);
			$email				= $dados['email'];
			
			$response['nome'] 	=  $nome;
			$response['email'] 	=  $email;
			$response['id']		=  $id_cad;
			//retorno sucesso
			echo json_encode($response);
		}else{
			$response['login'] =  'falha';
			//retorno sucesso
			echo json_encode($response);
		}
 

	}else{
		$response['auth_token'] =  false;
		echo json_encode($response);
	}
}else{
	$response['token'] = 'falha no token';
	$response['method'] = 'falha no metodo';
	echo json_encode($response);
}
?>