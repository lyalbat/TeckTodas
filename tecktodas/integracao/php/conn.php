<?php
$host = 		"localhost"; //Servidor do mysql
$user = 		"tijacque_todasteck"; //Usuario do banco de dados
$senha = 		"aw(8,HrYF$&T"; //senha do banco de dados
$db = 			"tijacque_tecktodas"; //banco de dados
$nome_site = 	"Vtex - Teck Todas"; 

mysql_connect($host, $user, $senha) or die (mysql_error());
mysql_select_db($db) or die (mysql_error()); 


/*$link = mysqli_connect("localhost", "tijacque_todasteck", "aw(8,HrYF$&T", "my_db");

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;

mysqli_close($link);*/
?>