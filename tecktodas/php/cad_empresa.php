<?php 
$cnpj 		= addslashes(utf8_decode($_POST['cnpj']));
$nomeempresa 	= addslashes(utf8_decode($_POST['nomeempresa']));
$representante	= addslashes(utf8_decode($_POST['representante']));
$telefone	= addslashes(utf8_decode($_POST['telefone']));
$email		= addslashes(utf8_decode($_POST['email']));
$sen 		= addslashes(utf8_decode($_POST['senha']));
$confsenha	= addslashes(utf8_decode($_POST['confsenha']));
$estado		= addslashes(utf8_decode($_POST['estado']));
$cidade		= addslashes(utf8_decode($_POST['cidade']));

if(empty($sen) or $sen != $confsenha){
	echo '<script>
			alert("Senhas diferentes ou não preenchidas");
			history.go(-1);
		  </script>';
			exit;
}

	  // Elimina possivel mascara     
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
		echo '<script>
			alert("CNPJ Incorreto");
			history.go(-1);
		  </script>';
			exit;
	}
	// Valida tamanho
	if (strlen($cnpj) != 14){
		echo '<script>
			alert("CNPJ Incorreto");
			history.go(-1);
		  </script>';
			exit;
	}
	// Verifica se todos os digitos são iguais
	if (preg_match('/(\d)\1{13}/', $cnpj)){
		echo '<script>
			alert("CNPJ Incorreto");
			history.go(-1);
		  </script>';
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
		echo '<script>
			alert("CNPJ Incorreto");
			history.go(-1);
		  </script>';
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
		echo '<script>
			alert("CNPJ Incorreto");
			history.go(-1);
		  </script>';
			exit;
	}

include ("../integracao/php/conn.php");
	$sql_busca = ("SELECT * FROM `cad_empresa` 
			WHERE cnpj='".$cnpj."' AND
			status_empresa !='I';");
			$query_busca= mysql_query($sql_busca);
			$num_busca = mysql_num_rows($query_busca);
			
	if($num_busca<1){
  
		
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
			 VALUES ('".$nomeempresa."', 
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
					
					echo '<meta http-equiv="refresh" content="0;url=../site/login_empresa.php" />';
					
			
			}else{
				
				echo 
				'
				<meta charset="utf-8">
				<script>
				alert("CNPJ já cadastrado");
				history.go(-1);
			  </script>';
				exit;
			}
	 
	
	
	


?>