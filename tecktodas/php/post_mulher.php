<?php 
session_start();

if(!isset($_SESSION['nome']) or empty($_SESSION['nome'])){
	echo '<script>
		alert("Realize o login e confira as novidades por aqui...");
		history.go(-1);
	</script>';
	exit;
}
$id = $_SESSION['id_mulher'];
$post = addslashes(utf8_encode($_POST['post']));

if(empty($post)){
	echo '
	<script>
		
		history.go(-1);
	</script>
	
	';
	exit;
}

include ("../integracao/php/conn.php");
	//busca no banco 
		$datetime = date('Y-m-d');
		$sql = "INSERT INTO postagens 
		(id_mulher, conteudo, data_post)
		VALUES 
		('".$id."','".$post."','".$datetime."')";
		
		mysql_query($sql);
		echo '<meta http-equiv="refresh" content="0;url=../site/comunidade.php" />';

		
?>