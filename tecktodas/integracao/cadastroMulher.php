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
	$nome		= addslashes(utf8_decode($_POST['nome']));
	$email		= addslashes($_POST['email']);
	
	
	
	/*$estado_civil= addslashes(utf8_decode($_POST['estado_civil']));
	$data_nascimento= $_POST['data_nascimento'];*/
	
	$cpf 		= $_POST['cpf'];
	$sen		= $_POST['sen'];
	$tel		= $_POST['telefone'];
	$sobrenome	= addslashes(utf8_decode($_POST['sobrenome']));
	//conexao banco
	

			include_once("php/conn.php");
	$sql_busca = ("SELECT * FROM `cad_mulher` 
			WHERE cpf='".$cpf."' AND
			status !='I';");
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
			$sql = ("INSERT INTO `cad_mulher` 
			( cpf, senha, email, 
			data_cad, status, nome, whatsapp, sobrenome) 
			VALUES('".$cpf."','".$sen."','".$email."',
			
			'".$hoje."','', '".$nome."', '".$tel."', '".$sobrenome."');");
			$sql_cadastro = mysql_query($sql);
			if($sql_cadastro){
				$sql2 = ("SELECT * FROM `cad_mulher` 
				WHERE cpf='".$cpf."' and senha = '".$sen."' AND
				status !='I';");
				$sql_logar = mysql_query($sql2);
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
				}
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
		
		$response['cadastro'] = utf8_encode('CPF J&aacute; cadastrado');
		echo json_encode($response);
	}
	}
	else{
	$response['token'] = 'falha no token';
	$response['method'] = 'falha no metodo';
	echo json_encode($response);
}
?>