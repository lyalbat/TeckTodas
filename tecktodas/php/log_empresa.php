<?php 

$email= addslashes(utf8_decode($_POST['email']));
$sen 		= addslashes(utf8_decode($_POST['senha']));

if(!filter_var($email, FILTER_VALIDATE_EMAIL))
	{
		echo '<script>
				alert("E-mail Incorreto");
				history.go(-1);
			  </script>';
				exit;
	}
	
include ("../integracao/php/conn.php");
	//busca no banco 
		$datetime = date('Y-m-d H:i:s');
		$sql = ("SELECT * FROM `cad_empresa` 
		WHERE email='".$email."' and senha = '".$sen."' AND
		status_empresa ='A';");
		$sql_logar = mysql_query($sql);
		$num_retorno = mysql_num_rows($sql_logar);
		if($num_retorno>0){
			//array com os retornos
			$dados = mysql_fetch_array ($sql_logar);
			$id 			= $dados["id_empresa"];
			$razao_social	= utf8_encode($dados['razao_social']);
			$email			= $dados['email'];
			$representante	= utf8_encode($dados['representante']);
			
			session_start();
			$_SESSION['id'] 			= $id;
			$_SESSION['razao_social']	= $razao_social;
			$_SESSION['email']			= $email;
			$_SESSION['representante'] 	= $representante;
			
			echo '<meta http-equiv="refresh" content="0;url=../site/empresas.php" />';
			
			
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