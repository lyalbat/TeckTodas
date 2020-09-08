<?php 
$nome 		= addslashes(utf8_decode($_POST['nome']));
$sobrenome 	= addslashes(utf8_decode($_POST['sobrenome']));
$telefone	= addslashes(utf8_decode($_POST['telefone']));
$cpf_verifica= addslashes(utf8_decode($_POST['cpf']));
$email		= addslashes(utf8_decode($_POST['email']));
$sen 		= addslashes(utf8_decode($_POST['senha']));
$confsenha	= addslashes(utf8_decode($_POST['confsenha']));

if(empty($sen) or $sen != $confsenha){
	echo '<script>
			alert("Senhas diferentes ou não preenchidas");
			history.go(-1);
		  </script>';
			exit;
}

	  // Elimina possivel mascara
    $cpf = ereg_replace('[^0-9]', '', $cpf_verifica);
    $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);
     
    // Verifica se o numero de digitos informados é igual a 11 
    if (strlen($cpf) != 11) {
        echo '<script>
				alert("CPF Incorreto");
				history.go(-1);
			  </script>';
				exit;
    }
    // Verifica se nenhuma das sequências invalidas abaixo 
    // foi digitada. Caso afirmativo, retorna falso
    else if ($cpf == '00000000000' || 
        $cpf == '11111111111' || 
        $cpf == '22222222222' || 
        $cpf == '33333333333' || 
        $cpf == '44444444444' || 
        $cpf == '55555555555' || 
        $cpf == '66666666666' || 
        $cpf == '77777777777' || 
        $cpf == '88888888888' || 
        $cpf == '99999999999') {
			
        echo '<script>
				alert("CPF Incorreto");
				history.go(-1);
			  </script>';
				exit;
     // Calcula os digitos verificadores para verificar se o
     // CPF é válido
     } else {   
         
        for ($t = 9; $t < 11; $t++) {
             
            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $cpf{$c} * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf{$c} != $d) {
                //caso nao valido
				
				echo '<script>
				alert("CPF Incorreto");
				history.go(-1);
			  </script>';
				exit;
            }
        }
 		$cpf_verifica = $cpf;
       //caso ok
    }
if(!filter_var($email, FILTER_VALIDATE_EMAIL))
	{
		echo '<script>
				alert("E-mail Incorreto");
				history.go(-1);
			  </script>';
				exit;
	}

include ("../integracao/php/conn.php");
	$sql_busca = ("SELECT * FROM `cad_mulher` 
			WHERE cpf='".$cpf."' AND
			status !='I';");
			$query_busca= mysql_query($sql_busca);
			$num_busca = mysql_num_rows($query_busca);
			
	if($num_busca<1){
				
  
		
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
					
					echo '<meta http-equiv="refresh" content="0;url=../site/login_mulher.php" />';
					
				}
			}
			}else{
				
				echo 
				'
				<meta charset="utf-8">
				<script>
				alert("CPF já cadastrado");
				history.go(-1);
			  </script>';
				exit;
			}
	 
	
	
	


?>