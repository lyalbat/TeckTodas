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
	$id_mulher		= addslashes(utf8_decode($_POST['id_mulher']));
	$tipo_curso		= addslashes(utf8_decode($_POST['tipo_curso']));
	$curso		= addslashes(utf8_decode($_POST['curso']));
	$duracao			= $_POST['duracao'];
	$carga_horaria	= addslashes(utf8_decode($_POST['carga_horaria']));
	$conclusao		= addslashes(utf8_decode($_POST['conclusao']));
	$ano_conclusao		= addslashes(utf8_decode($_POST['ano_conclusao']));
	$instituicao	= addslashes(utf8_decode($_POST['instituicao']));
	
//conexao banco
			include_once("php/conn.php");
	
  
		if ($api_token== $api_token_guardada) { 
		
		//if($api_token == "token_ativo"){
			
			// DEFINE O FUSO HORARIO COMO O HORARIO DE BRASILIA
		date_default_timezone_set('America/Sao_Paulo');
			$hoje = date('Y-m-d');
			//busca no banco 
			$datetime = date('Y-m-d H:i:s');
			$sql = ("INSERT INTO `experiencia_prof` 
			(`id_cad`, 
			`tipo_formacao`, 
			`curso`, 
			`duracao`, 
			`carga_horaria`, 
			`conclusao`, 
			`ano_conclusao`,
			instituicao,
			data_cad_f) 
			 VALUES ('".$id_mulher."', 
			 '".$tipo_curso."', 
			 '".$curso."', 
			 '".$duracao."', 
			 '".$carga_horaria."', 
			 '".$conclusao."',
			 '".$ano_conclusao."',
			 '".$instituicao."',
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
	; 
	
		}else{
			$response['auth_token'] =  false;
			echo json_encode($response);
		}
	
	}
	else{
	$response['token'] = 'falha no token';
	$response['method'] = 'falha no metodo';
	echo json_encode($response);
}
?>