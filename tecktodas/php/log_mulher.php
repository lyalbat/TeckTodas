<?php 

$cpf_verifica= addslashes(utf8_decode($_POST['cpf']));
$sen 		= addslashes(utf8_decode($_POST['senha']));


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


include ("../integracao/php/conn.php");
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
			
			session_start();
			$_SESSION['id_mulher'] 	= $id_cad;
			$_SESSION['nome']		= $nome;
			$_SESSION['email']		= $email;
			
			echo '<meta http-equiv="refresh" content="0;url=../site/comunidade.php" />';
			
			
		}else{
			echo '
			<script>
				alert("Dados incorretos");
				history.go(-1);
			</script>
			
			';
			exit;
		}
?>